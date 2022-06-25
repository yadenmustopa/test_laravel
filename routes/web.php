<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    var_dump("didieu");
    $storagePath  = Storage::disk('local');
    var_dump( $storagePath );

    return view('welcome');
});


Route::get( '/about', function () {
    return view('about');
});


// Route::get() 