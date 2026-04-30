<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello world";
//return view('welcome');
});

Route::get('/teste', function(){
    echo "Teste haha";
});