<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get("/", [TestController::class, 'home'])->name('home');

Route::get("/test", [TestController::class, 'test'])->name('test');
