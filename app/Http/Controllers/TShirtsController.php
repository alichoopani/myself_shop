<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TShirtsController extends Controller
{
    public function index()
    {
        return view('products.t-shirt');
    }
}
