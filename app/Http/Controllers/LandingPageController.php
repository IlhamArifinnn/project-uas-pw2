<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function about()
    {
        return view("about");
    }

    public function contact()
    {
        return view("contact");
    }

    public function parkir_locations()
    {
        return view("parkir-locations");
    }

    public function parkir_services()
    {
        return view("parkir-services");
    }
}
