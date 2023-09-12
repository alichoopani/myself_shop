<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
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
        return view('pages.faqs');
    }
}
