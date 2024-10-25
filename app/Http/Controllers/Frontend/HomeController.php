<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home()
    {
        $catalogues = \App\Models\Catalogue::isNotTag()->get();

        $works = \App\Models\Work::with('images')->latest('id')->limit(10)->get();


        return view('frontend.pages.home', compact('catalogues', 'works'));
    }


}
