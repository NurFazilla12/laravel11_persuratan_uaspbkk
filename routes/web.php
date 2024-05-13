<?php

use App\Http\Controllers\NamaTandatanganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tandatangan',[NamaTandatanganController::class,'index']);
