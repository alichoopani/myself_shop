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
        $tShirts = TShirt::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $latestBagsHats = Hat::query()
            ->with('bags')
            ->where('approved', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $accessories = PhoneCover::query()->with('car_accessories')
            ->where('approved', 1)
            ->orderBy('created_at', 'desc')
            ->inRandomOrder()
            ->get();

        return view('index', [
            'tShirts' => $tShirts,
            'latestBagsHats' => $latestBagsHats,
            'accessories' => $accessories
        ]);
    }
}
