<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Faq;
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
    { //bayad yeki yeki namayesh dade beshe
        $faq = Faq::query()
            ->where('approved', 1)
            ->get();

        return view('pages.faqs', ['faq' => $faq]);
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }
}
