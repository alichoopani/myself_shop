<?php

namespace App\Http\Controllers;

use App\Models\Ecu;
use Illuminate\Http\Request;

class EcuController extends Controller
{
    public function index()
    {
        $ecus = Ecu::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'asc')
            ->paginate(12);

        return view('products.ecu', ['ecus' => $ecus]);
    }

    public function ecuDetail($id)
    {
        $ecu = Ecu::query()
            ->where('approved', 1)
            ->findOrFail((int)$id);

        return view('product-detail.ecu-detail', ['ecu' => $ecu]);
    }
}
