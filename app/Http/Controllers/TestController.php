<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class TestController extends Controller
{

    public function home()
    {
        Log::debug('Home');

        return Inertia::render('HomePage', [

        ]);
    }

    public function test()
    {
        return Inertia::render('TestPage', [

        ]);
    }

}
