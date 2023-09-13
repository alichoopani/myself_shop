<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use App\Models\Category;
use App\Models\Hat;
use App\Models\PhoneCover;
use App\Models\Product;
use App\Models\T_Shirt;
use App\Models\TShirt;
use App\Models\Tyre;
use App\Models\Wheel;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;

class HomeController extends Controller
{
    public function index()
    {
        $headers = Product::query()
            ->with(['category' => function ($query) {
                return $query->where('approved', 1);
            }])
            ->select('category_id', '=', 1)
            ->select([
                'title',
                'category_id',
                'image',
                'final_price',
                'brand_id',
                'description'
            ])
            ->where('category_id', '=', 1)
            ->where('approved', 1)
            ->inRandomOrder()
            ->limit(1)
            ->get();

        $pistons = Product::query()
            ->with(['category' => function ($query) {
                return $query->where('approved', 1);
            }])
            ->where('category_id', '=', 2)
            ->select([
                'title',
                'category_id',
                'image',
                'final_price',
                'brand_id',
                'description'
            ])
            ->where('approved', 1)
            ->inRandomOrder()
            ->limit(1)
            ->get();

        $camShaft = Product::query()
            ->with(['category' => function ($query) {
                return $query->where('approved', 1);
            }])
            ->where('category_id', '=', 3)
            ->select([
                'title',
                'category_id',
                'image',
                'final_price',
                'brand_id',
                'description'
            ])
            ->where('approved', 1)
            ->inRandomOrder()
            ->limit(1)
            ->get();

        $camGear = Product::query()
            ->with(['category' => function ($query) {
                return $query->where('approved', 1);
            }])
            ->select([
                'title',
                'category_id',
                'image',
                'final_price',
                'brand_id',
                'description'
            ])
            ->where('category_id', '=', 4)
            ->where('approved', 1)
            ->inRandomOrder()
            ->limit(1)
            ->get();

        return view('index', [
            'headers' => $headers,
            'pistons' => $pistons,
            'camShaft' => $camShaft,
            'camGear' => $camGear
        ]);
    }
}
