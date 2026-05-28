<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::options('/{any}', function () {
    return response('', 204);
})->where('any', '.*');
