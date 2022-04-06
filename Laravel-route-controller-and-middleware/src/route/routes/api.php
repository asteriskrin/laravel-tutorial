<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('articles', function() {
    // mendapatkan semua data dari database di sini
    // contoh data
    $articles = [
        [
            "id"=>"1",
            "title"=>"Laravel 8 Basics",
            "author"=>"John Lemon"
        ],
        [
            "id"=>"2",
            "title"=>"Express Basics",
            "author"=>"John Mango"
        ]
    ];
    return $articles;
});

Route::post('articles', function(Request $request) {
    // menyimpan data ke database di sini
    // contoh response
    $response = [
        "request"=>$request->json()->all(),
        "msg"=>"Article is successfully posted"
    ];
    return $response;
});

Route::get("pegawai", function (Request $request) {
    return [
        "url"=>$request->url(),
        "method"=>$request->method(),
        "ipAddress"=>$request->ip(),
        "allQueryString"=>$request->query()
    ];
});
