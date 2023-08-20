<?php

namespace App\Http\Controllers;

use App\Models\Wheel;
use Illuminate\Http\Request;

class WheelsController extends Controller
{
    public function index()
    {
        $wheels = Wheel::query()
            ->where('approved', 1)
            ->orderBy('updated_at', 'asc')
            ->paginate(12);

        return view('products.wheel', ['wheels' => $wheels]);
    }

    public function wheelDetail($id)
    {
        $wheel = Wheel::query()
            ->where('approved', 1)
            ->findOrFail((int)$id);

        return view('product-detail.wheel-detail', ['wheel' => $wheel]);
    }
}
