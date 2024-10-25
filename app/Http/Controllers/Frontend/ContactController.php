<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function contactSubmit(Request $request)
    {
        $criteria = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => ['required', 'regex:/^(03|05|07|08|09)[0-9]{8}$/'],
            'company' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required'
        ], __('request.messages'), [
            'fullName' => 'Họ và tên',
            'phone' => 'Số điện thoại',
            'company' => 'Công ty',
            'subject' => 'Tiêu đề',
            'message' => 'Tin nhắn'
        ]);
        Contact::create($criteria);
        session()->flash('success', 'Đã gửi tin nhắn thành công');
        return redirect()->back();
    }
}
