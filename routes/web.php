<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\CheckController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

//home page
Route::get('/', function () {
    return view('pages.index');
});
//Route::get('/check', [CheckController::class, 'index']);
//Route::get('/check',function () {
////    App\Jobs\DnsSearchDataJob::dispatch("run joooob!"); //не писать логику в роутах!
//
//});

Route::get('/check',[CheckController::class, 'index']);
Route::post('/check',[CheckController::class, 'checkDNSname'])->name('submit-form');

Route::get('/result', [ResultController::class, 'index']);
