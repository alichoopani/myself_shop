<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CamShaftController extends Controller
{
    public function index()
    {
        return view('products.camshaft');
    }
}
