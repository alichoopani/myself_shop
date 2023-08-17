<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WheelsController extends Controller
{
    public function index()
    {
        return view('products.wheel');
    }
}
