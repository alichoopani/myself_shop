<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Faq;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutUs()
    {
        $aboutUs = AboutUs::query()
            ->select([
                'email',
                'social_media',
                'address',
                'content',
                'image'
            ])
            ->where('approved', 1)
            ->first();

        return view('pages.about-us', ['aboutUs' => $aboutUs]);
    }

    public function faqs()
    {
        $faq = Faq::query()
            ->select([
                'question',
                'answer'
            ])
            ->where('approved', 1)
            ->get();

        return view('pages.faqs', ['faq' => $faq]);
    }
}
