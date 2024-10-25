<?php

namespace App\Http\Controllers\Backend\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigHomePageController extends Controller
{
    function index(){

        return view('backend.config.home');
    }
}
