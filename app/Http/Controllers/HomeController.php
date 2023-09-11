<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use App\Models\Hat;
use App\Models\PhoneCover;
use App\Models\T_Shirt;
use App\Models\TShirt;
use App\Models\Tyre;
use App\Models\Wheel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', []);
    }
}
