<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
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

Route::get('/', function () {
    return view('pages/blog');
});
Route::get('/details', function () {
    return view('pages/details');
});
Route::get('/Blog Details', [homecontroller::class,'details'])->name('details');