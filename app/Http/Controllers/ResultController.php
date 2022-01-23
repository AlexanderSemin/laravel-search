<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DNSInfo;

class ResultController extends Controller
{
    

    public function index(){

        $dnsResults = DNSInfo::all();
//        dd($dnsResults);

        return view('pages.result', [
            "result" => $dnsResults
        ]);
    }

}
