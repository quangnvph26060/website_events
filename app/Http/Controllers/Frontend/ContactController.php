<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function contactSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|min:3|max:255',
            'email' => 'required|email',
            'phone' => ['required', 'regex:/^(03|05|07|08|09)[0-9]{8}$/'],
            'company' => 'required|string|min:3|max:255',
            'subject' => 'required|string|min:3|max:255',
            'message' => 'required'
        ], __('request.messages'), [
            'fullName' => 'Họ và tên',
            'email' => 'Email',
            'phone' => 'Số điện thoại',
            'company' => 'Công ty',
            'subject' => 'Tiêu đề',
            'message' => 'Tin nhắn'
        ]);
        if ($validator->fails()) {

            return response()->json(['error' => $validator->errors()]);
        }
        Contact::create($request->all());
        return response()->json(['success' => 'Đã gửi tin nhắn liên hệ thành công']);
    }
}