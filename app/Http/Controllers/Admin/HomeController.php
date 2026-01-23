<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class  HomeController
{
    public function home()
    {
        Log::debug('Home Admin');

        return Inertia::render('AdminPage', [
            "pageName" => "Admin Page",
        ]);
    }


    public function test()
    {
        Log::debug('Test Admin');

        return Inertia::render('AdminPage', [
            "pageName" => "Admin Page",
        ]);
    }

}
