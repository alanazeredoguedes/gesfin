<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TestController extends Controller
{

    public function home()
    {
        return Inertia::render('HomePage', [

        ]);
    }

    public function test()
    {
        return Inertia::render('TestPage', [

        ]);
    }

}
