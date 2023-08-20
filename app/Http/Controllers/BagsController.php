<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use Illuminate\Http\Request;

class BagsController extends Controller
{
    public function index()
    {
        $bags = Bag::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'asc')
            ->paginate(12);

        return view('products.bag', ['bags' => $bags]);
    }

    public function bagDetail($id)
    {
        $bag = Bag::query()
            ->where('approved', 1)
            ->findOrFail((int)$id);

        return view('product-detail.bag-detail', ['bag' => $bag]);
    }
}
