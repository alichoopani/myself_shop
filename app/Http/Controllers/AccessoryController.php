<?php

namespace App\Http\Controllers;

use App\Models\CarAccessory;
use App\Models\PhoneCover;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    public function carAccessoryIndex()
    {
        $accessories = CarAccessory::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'asc')
            ->paginate(12);

        return view('products.car-accessory', ['accessories' => $accessories]);
    }

    public function carAccessoryDetail($id)
    {
        $carAccessory = CarAccessory::query()
            ->where('approved', 1)
            ->findOrFail((int)$id);

        return view('product-detail.carAccessory-detail', ['carAccessory' => $carAccessory]);
    }

    public function phoneAccessoryIndex()
    {
        $accessories = PhoneCover::query()
            ->where('approved', 1)
            ->orderBy('created_at', 'asc')
            ->paginate(12);

        return view('products.phone-cover', ['accessories' => $accessories]);
    }

    public function phoneAccessoryDetail($id)
    {
        $phoneAccessory = PhoneCover::query()
            ->where('approved', 1)
            ->findOrFail((int)$id);

        return view('product-detail.phoneCover-detail', ['phoneAccessory' => $phoneAccessory]);
    }
}
