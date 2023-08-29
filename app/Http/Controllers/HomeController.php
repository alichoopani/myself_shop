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

        $latestHats = Hat::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $accessories = PhoneCover::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'desc')
            ->inRandomOrder()
            ->get();

        $latestBags = Bag::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('index', [
            'tShirts' => $tShirts,
            'latestHats' => $latestHats,
            'accessories' => $accessories,
            'latestBags' => $latestBags
        ]);
    }
}
