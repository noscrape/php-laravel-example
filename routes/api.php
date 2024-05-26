<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Schoenbergerb\Noscrape\Noscrape;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function() {
    $noscrape = new Noscrape(base_path() . "/resources/font/ubuntu.ttf");
    return $noscrape->obfuscate("hello world");
});
