<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Faqs;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutUs()
    {
        $aboutUs = AboutUs::query()
            ->where('approved', 1)
            ->get();

        return view('pages.about-us', ['aboutUs' => $aboutUs]);
    }

    public function faqs()
    {
//        $faq = Faqs::query()
//            ->where('approved', 1)
//            ->get();

        return view('pages.faqs', );
    }
}
