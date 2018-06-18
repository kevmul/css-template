<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // flash('Success!', 'Something has NOT gone terribly wrong!')->tertiary();
        return view('home.index');
    }
}
