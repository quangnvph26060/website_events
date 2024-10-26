<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ConfigHome;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function home()
    {
        $catalogues = \App\Models\Catalogue::isNotTag()->get();

        $works = \App\Models\Work::with('images')->latest('id')->limit(10)->get();

        $configHome = ConfigHome::first();

        return view('frontend.pages.home', compact('catalogues', 'works', 'configHome'));
    }


}
