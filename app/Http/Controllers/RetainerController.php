<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RetainerController extends Controller
{
    public function index()
    {
        return view('products.retainer');
    }
}
