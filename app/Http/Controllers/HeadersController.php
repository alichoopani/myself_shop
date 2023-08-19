<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeadersController extends Controller
{
    public function index()
    {
        return view('products.headers');
    }
}
