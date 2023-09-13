<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use App\Models\Hat;
use App\Models\PhoneCover;
use App\Models\Product;
use App\Models\T_Shirt;
use App\Models\TShirt;
use App\Models\Tyre;
use App\Models\Wheel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $headers = Product::query()
            ->select([
                'title',
                'image',
                'final_price',
                'brand_id',
                'description'
            ])
            ->where('approved', 1)
            ->inRandomOrder()
            ->get();

        return view('index', ['headers' => $headers]);
    }
}
