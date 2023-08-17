<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagsController extends Controller
{
    public function index()
    {
        return view('products.bag');
    }
}
