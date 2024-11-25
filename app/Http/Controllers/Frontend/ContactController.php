<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Contact;
use App\Models\ConfigHome;
use App\Models\ConfigBanner;
use Illuminate\Http\Request;
use App\Mail\SenMailNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact()
    {
        $configHome = ConfigHome::first();
        $banner = ConfigBanner::where('page_name', 1)->first();
        return view('frontend.pages.contact', compact('banner', 'configHome'));
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
                'status' => false,
                'error' => $validator->errors()->first()
            ]);
        }
        $credentials = $validator->validated();

        $recentContact = Contact::where([
            'phone' => $credentials['phone'],
            'email' => $credentials['email'],
        ])
            ->where('created_at', '>=', Carbon::now()->subMinutes(5))
            ->first();

        if ($recentContact) {
            return response()->json([
                'status' => false,
                'message' => 'Bạn đã gửi liên hệ trong vòng 5 phút trước. Vui lòng chờ thêm.',
            ]);
        }

        $credentials['created_at'] = Carbon::now();



        DB::beginTransaction();
        try {
            $contact = Contact::updateOrCreate(
                ['phone' => $credentials['phone'], 'email' => $credentials['email']],
                $credentials
            );

            $email = config('mail.to');
            Mail::to($email)->send(new SenMailNotification($contact));

            DB::commit();

            return response()->json(['success' => 'Đã gửi tin nhắn liên hệ thành công', 'status' => true]);
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            DB::rollBack();
            return response()->json(['success' => 'Đã gửi tin nhắn liên hệ thất bại', 'status' => false]);
        }
    }
}
