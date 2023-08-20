<?php

namespace App\Http\Controllers;

use App\Models\Tyre;
use Illuminate\Http\Request;

class TyresController extends Controller
{
    public function index()
    {
        $tyres = Tyre::query()
            ->where('approved', 1)
            ->orderBy('updated_at', 'asc')
            ->paginate(12);

        return view('products.tyre', ['tyres' => $tyres]);
    }

    public function tyreDetail($id)
    {
        $tyre = Tyre::query()
            ->where('approved', 1)
            ->findOrFail((int)$id);

        return view('product-detail.tyre-detail', ['tyre' => $tyre]);
    }
}
