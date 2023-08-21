<?php

namespace App\Http\Controllers;

use App\Models\Retainer;
use Illuminate\Http\Request;

class RetainerController extends Controller
{
    public function index()
    {
        $retainers = Retainer::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'asc')
            ->paginate(12);

        return view('products.retainer', ['retainers' => $retainers]);
    }

    public function retainerDetail($id)
    {
        $retainer = Retainer::query()
            ->where('approved', 1)
            ->findOrFail((int)$id);

        return view('product-detail.retainer-detail', ['retainer' => $retainer]);
    }
}
