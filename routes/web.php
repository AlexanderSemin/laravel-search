<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\Admin\HomeController;
//use \Spatie\Permission\Models\Role;
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

//Route::get('/check',function () {
////    App\Jobs\DnsSearchDataJob::dispatch("run joooob!"); //не писать логику в роутах!
//
//});

Route::get('/check',[CheckController::class, 'index'])->name('pages.check');
Route::post('/check',[CheckController::class, 'checkDNSname'])->name('submit-form');
Route::get('/result', [ResultController::class, 'index'])->name('pages.result');



Route::middleware(['role:admin'])->prefix('administrator')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('administrator'); // /administrator
//    Route::get('/settings', [HomeController::class, 'settings']); // /administrator
    Route::get('/list-domain', [HomeController::class, 'list_domain']);
//    Route::resource('post', PostController::class);
});

