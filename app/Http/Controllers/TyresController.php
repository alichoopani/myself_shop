<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TyresController extends Controller
{
    public function index()
    {
        return view('products.tyre');
    }
}
