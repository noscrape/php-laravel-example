<?php

use Illuminate\Support\Facades\Route;
use Noscrape\Noscrape\Noscrape;

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


Route::get('/test', function () {
    $noscrape = new Noscrape(public_path("font/ubuntu.ttf"));

    return view('welcome', [
        'title' => $noscrape->obfuscate("Welcome to Noscrape"),
        'description' => $noscrape->obfuscate("This is text is obfuscated."),
        'font' => $noscrape->render()
    ]);
});
