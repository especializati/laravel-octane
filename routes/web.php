<?php

use App\Services\Example;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    Example::$values[] = rand(4, 2);

    dd(Example::$values);
});

Route::get('/', function () {
    return view('welcome');
});
