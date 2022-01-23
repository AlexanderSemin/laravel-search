<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\DNSInfo;
//use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CheckDNSRequest;
use App\Jobs\DnsSearchDataJob;

class CheckController extends Controller
{
    public function index(){

        return view('pages.check');
    }

    public function checkDNSname(CheckDNSRequest $request){

        $strDNS = $request->input('domain_name');
        dispatch(new DnsSearchDataJob($strDNS));

//        $validatedData = $request->validate(); //dont need anymore/ laravel do this auto
//        $dnsinfo = new DNSInfo();
//        $dnsinfo->domain = $request->input('domain_name');
//        $dnsinfo->save();

        return redirect()->back()->with('success', 'Great! submit success.');

    }
}
