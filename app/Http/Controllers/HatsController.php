<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HatsController extends Controller
{
    public function index()
    {
        return view('products.hat');
    }
}
