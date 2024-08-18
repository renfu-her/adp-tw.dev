<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VideoController;

// Route::get('/', [HomeController::class, 'index'])->name('home');

Route::any('{any}', function () {
    return view('app'); // 確保這裡返回的是你的 Vue 入口文件，通常是 app.blade.php
})->where('any', '.*');
