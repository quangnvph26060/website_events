<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        $title = 'Danh sách liên hệ';
        $contacts = Contact::orderBy('id' , 'desc')->get();
        return view('backend.contact.index' , compact('title' , 'contacts'));
    }
}
