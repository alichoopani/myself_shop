<?php

namespace App\Http\Controllers;

use App\Models\CamShaft;
use Illuminate\Http\Request;

class CamShaftController extends Controller
{
    public function index()
    {
        $camShafts = CamShaft::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'asc')
            ->paginate(12);

        return view('products.camshaft', ['camShafts' => $camShafts]);
    }

    public function camShaftDetail($id)
    {
        $camShaft = CamShaft::query()
            ->where('approved', 1)
            ->findOrFail((int)$id);

        return view('product-detail.camshaft-detail', ['camShaft' => $camShaft]);
    }
}
