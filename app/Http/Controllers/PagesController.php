<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function Welcome(): view
    {
    
        return view('pages.welcome');

    }

    public function dummyapi()
    {
        return ('AQ');
    }
}

