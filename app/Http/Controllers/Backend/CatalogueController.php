<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    function index(){
        return view('backend.catalogues.index');
    }

    function create(){
        return view('backend.catalogues.create');
    }
}
