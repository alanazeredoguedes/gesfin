<?php

namespace App\Http\Controllers\Client;

use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class  HomeController
{
    public function home()
    {
        Log::debug('Home Client');

        return Inertia::render('HomePage', [
            "pageName" => "Client Page",
        ]);
    }

}
