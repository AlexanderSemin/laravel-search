<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Http\Requests\CheckDNSRequest;
use App\Models\DNSInfo;


// don't forget
// php artisan queue:work --daemon  xD
class DnsSearchDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $dnsname;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($dnsname)
    {
        info("__construct!");
//        dd($dnsname);
        $this->dnsname = $dnsname;
        info($this->dnsname);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $string_url = '';

        //todo: need check link with https/http/www  and simple link like  testsite.tt


        if(str_replace(array('http', 'https', 'www'), '', $this->dnsname) != $this->dnsname){

            $string_url = $this->dnsname;
        } else{
            $string_url = parse_url($this->dnsname);
        }

        $ip = gethostbyname($string_url);
        info($this->dnsname . " - " . $ip);
        //write only valid adress to db
        if(filter_var($ip, FILTER_VALIDATE_IP)) {
            $dnsinfo = new DNSInfo();
            $dnsinfo->domain = $this->dnsname;
            $dnsinfo->ip = $ip;
            $dnsinfo->save();
        }


    }


}
