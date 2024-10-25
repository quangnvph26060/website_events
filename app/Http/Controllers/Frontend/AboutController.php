<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about(){
        $aboutUs = About::all();
        return view('frontend.pages.about' , compact('aboutUs'));
    }
}
