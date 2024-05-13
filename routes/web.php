<?php


use App\Http\Controllers\HomeController ;
use App\Http\Controllers\KepalaSuratController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\TandatanganController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);
Route::resources([
    'tandatangan' => TandatanganController::class,
    'kepalasurat' => KepalaSuratController::class,
    'suratkeluar' => SuratKeluarController::class,
    'users' => UserController::class,

]);
