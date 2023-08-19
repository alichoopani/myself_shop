<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcuController extends Controller
{
    public function index()
    {
        return view('products.ecu');
    }
}
