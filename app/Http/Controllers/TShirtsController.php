<?php

namespace App\Http\Controllers;

use App\Models\TShirt;
use Illuminate\Http\Request;

class TShirtsController extends Controller
{
    public function index()
    {
        $tShirts = TShirt::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'asc')
            ->paginate(12);

        return view('products.t-shirt', ['tShirts' => $tShirts]);
    }

    public function tShirtDetail($id)
    {
        $tShirt = TShirt::query()
            ->where('approved', 1)
            ->findOrFail((int)$id);

        return view('product-detail.tShirt-detail', ['tShirt' => $tShirt]);
    }

}
