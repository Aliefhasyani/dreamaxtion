<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class RouteController extends Controller
{
    public function about()
    {
        return Inertia::render('AboutUs');
    }

    public function services()
    {
        return Inertia::render('AboutUs');
    }
    
    public function journey()
    {
        return Inertia::render('AboutUs');
    }
    
    public function founder()
    {
        return Inertia::render('AboutUs');
    }
    
    public function book()
    {
        return Inertia::render('AboutUs');
    }
}
