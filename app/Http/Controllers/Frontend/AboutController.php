<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\ConfigBanner;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about(){
        $aboutUs = About::all();
        $banner = ConfigBanner::where('page_name' , 1)->first();
        return view('frontend.pages.about' , compact('aboutUs' , 'banner'));
    }
}
