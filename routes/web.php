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
    // $storagePath  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
    // $storagePath = Storage::disk('public')->getDriver()->getAdapter()->getPathPrefix();
    // dd( $storagePath );

    return view('welcome');
});


Route::get( '/about', function () {
    $arr = ["agus" => ["data" => ["alamat" => "ciawi","no_hp"=> "0834273842"] ], "aris"=>["data" => ["alamat" => "cinusa", "no_hp"=> "0834276438264382"]] ];
    return view('about',["arr"=> $arr]);
});

Route::get( '/contact', function () {
    return view('contact');
});


// Route::get() 