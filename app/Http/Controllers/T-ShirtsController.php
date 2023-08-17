<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class T-ShirtsController extends Controller
{
    public function index()
    {
        return view('products.t-shirt');
    }
}
