<?php

namespace App\Http\Controllers;

use App\Models\Hat;
use Illuminate\Http\Request;

class HatsController extends Controller
{
    public function index()
    {
        $hats = Hat::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'asc')
            ->paginate(12);

        return view('products.hat', ['hats' => $hats]);
    }

    public function hatDetail($id)
    {
        $hat = Hat::query()
            ->where('approved', 1)
            ->findOrFail((int)$id);

        return view('product-detail.hat-detail', ['hat' => $hat]);
    }
}
