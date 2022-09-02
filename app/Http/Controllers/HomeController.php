<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //invoke function that returns index view
    public function __invoke()
    {
        return view('index');
    }
}
