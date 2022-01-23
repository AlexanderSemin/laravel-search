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


//        dd($this);
//        info($this->request);
//        info("1231231");
    }
}
