<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PistonController extends Controller
{
    public function index()
    {
        return view('products.piston');
    }
}
