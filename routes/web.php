<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello world";
//return view('welcome');
});

Route::get('/teste', function(){
    echo "Teste haha";
});

Route::get('/main/{value}', [MainController::class, 'index']);