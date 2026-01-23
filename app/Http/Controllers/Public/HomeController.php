<?php

namespace App\Http\Controllers\Public;

use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class  HomeController
{
    public function home()
    {
        Log::debug('Home Public');

        return Inertia::render('HomePage', [
            "pageName" => "Public Page",
        ]);
    }

}
