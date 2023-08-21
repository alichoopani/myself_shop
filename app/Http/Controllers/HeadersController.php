<?php

namespace App\Http\Controllers;

use App\Models\Headers;
use Illuminate\Http\Request;

class HeadersController extends Controller
{
    public function index()
    {
        $headers = Headers::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'asc')
            ->paginate(12);

        return view('products.headers', ['headers' => $headers]);
    }

    public function headersDetail($id)
    {
        $header = Headers::query()
            ->where('approved', 1)
            ->findOrFail((int)$id);

        return view('product-detail.headers-detail', ['header' => $header]);
    }
}
