<?php

namespace App\Http\Controllers;

use App\Models\CrankShaft;
use Illuminate\Http\Request;

class CrankShaftController extends Controller
{
    public function index()
    {
        $crankShafts = CrankShaft::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'asc')
            ->paginate(12);

        return view('products.crankshaft', ['crankShafts' => $crankShafts]);
    }

    public function crankShaftDetail($id)
    {
        $crankShaft = CrankShaft::query()
            ->where('approved', 1)
            ->findOrFail((int)$id);

        return view('product-detail.crankshaft-detail', ['crankShaft' => $crankShaft]);
    }
}
