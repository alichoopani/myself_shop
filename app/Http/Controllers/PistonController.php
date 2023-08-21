<?php

namespace App\Http\Controllers;

use App\Models\Piston;
use Illuminate\Http\Request;

class PistonController extends Controller
{
    public function index()
    {
        $pistons = Piston::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'asc')
            ->paginate(12);

        return view('products.piston', ['pistons' => $pistons]);
    }

    public function pistonDetail($id)
    {
        $piston = Piston::query()
            ->where('approved', 1)
            ->findOrFail((int)$id);

        return view('product-detail.piston-detail', ['piston' => $piston]);
    }
}
