<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index()
    {
        return view("front.index");
    }
    public function contact()
    {
        return view("front.contact");
    }
    public function about()
    {
        return view("front.about");
    }

    public function service()
    {
        return view("front.service");
    }
}