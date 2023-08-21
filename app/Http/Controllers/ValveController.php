<?php

namespace App\Http\Controllers;

use App\Models\Valve;
use Illuminate\Http\Request;

class ValveController extends Controller
{
    public function index()
    {
        $valves = Valve::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'asc')
            ->paginate(12);

        return view('products.valve', ['valves' => $valves]);
    }

    public function valveDetail($id)
    {
        $valve = Valve::query()
            ->where('approved', 1)
            ->findOrFail((int)$id);

        return view('product-detail.valve-detail', ['valve' => $valve]);
    }
}
