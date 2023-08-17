<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use App\Models\Hat;
use App\Models\T_Shirt;
use App\Models\Tyre;
use App\Models\Wheel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tyres = Tyre::query()
            ->where('approved', 1)
            ->inRandomOrder()
            ->get();

        $wheels = Wheel::query()
            ->where('approved', 1)
            ->inRandomOrder()
            ->get();

        $tShirts = T_Shirt::query()
            ->where('approved', 1)
            ->inRandomOrder()
            ->get();

        $bags = Bag::query()
            ->where('approved', 1)
            ->inRandomOrder()
            ->get();

        $hats = Hat::query()
            ->where('approved', 1)
            ->inRandomOrder()
            ->get();

        return view('index', [
            'tyres' => $tyres,
            'wheels' => $wheels,
            'tShirts' => $tShirts,
            'bags' => $bags,
            'hats' => $hats
        ]);
    }

    public function latestBags()
    {
        return view('index');
    }

    public function latestHats()
    {
        return view('index');
    }

    public function latestWheels()
    {
        return view('index');
    }

    public function latestTShirts()
    {
        return view('index');
    }
}
