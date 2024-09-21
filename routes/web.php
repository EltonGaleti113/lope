<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login', ['title' => 'Login Page']);
});

Route::get('/main', function(){
    $nome = "Username";
    return view ('main', ['name' => $nome]);
});
