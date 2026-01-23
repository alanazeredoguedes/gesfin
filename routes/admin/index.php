<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::group(["as" => "admin.", "prefix" => config("project.app_admin_name")], function () {

    Route::get("/", [HomeController::class, 'home'])->name('home');


});
