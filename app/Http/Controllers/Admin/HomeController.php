<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class  HomeController
{
    public function home()
    {
        Log::debug('Home Admin');

        return Inertia::render('Admin/HomePage', [
            "pageName" => "Admin Page",
        ]);
    }

}
