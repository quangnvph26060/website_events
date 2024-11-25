<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Contact;
use App\Models\ConfigHome;
use App\Models\ConfigBanner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact()
    {
        $configHome = ConfigHome::first();
        $banner = ConfigBanner::where('page_name' , 1)->first();
        return view('frontend.pages.contact' , compact('banner', 'configHome'));
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
            return response()->json([
                'error' => true,
                'validation_errors' => $validator->errors()
            ]);
        }
        $throttleTime = 30;
        $lastSubmitTime = session('last_submit_time');
        if ($lastSubmitTime && Carbon::now()->diffInSeconds($lastSubmitTime) < $throttleTime) {
            return response()->json([
                'error' => true,
                'spam_error' => 'Bạn đang gửi form quá nhanh. Hãy thử lại sau 30 giây.'
            ]);
        }
        session(['last_submit_time' => Carbon::now()]);
        Contact::create($request->all());
        return response()->json(['success' => 'Đã gửi tin nhắn liên hệ thành công']);
    }
}
