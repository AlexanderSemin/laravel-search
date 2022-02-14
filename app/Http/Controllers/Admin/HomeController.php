<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        return view('admin.home.index');
    }
    public function settings(){
        return view('admin.home.settings');
    }
    public function list_domain(){

        return view('admin.home.list_domain');
    }

}
