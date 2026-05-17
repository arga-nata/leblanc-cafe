<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'A Quiet Corner';
        return view('home', compact('title'));

    }
}
