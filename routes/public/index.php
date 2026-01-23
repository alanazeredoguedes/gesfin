<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\HomeController;

Route::group(["as" => "public.", "prefix" => ""], function () {

    Route::get("/", [HomeController::class, 'home'])->name('home');

});
