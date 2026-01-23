<?php

//declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;

Route::group(["as" => "client.", "prefix" => config("project.app_client_name")], function () {

    Route::get("/", [HomeController::class, 'home'])->name('home');

});
