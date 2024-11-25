<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ContactUsController extends Controller
{
    public function index(){
        $title = 'Danh sách liên hệ';
        $contacts = Contact::orderBy('id' , 'desc')->get();
        return view('backend.contact.index' , compact('title' , 'contacts'));
    }

    public function UpdateEmail(Request $request)
    {
        $credentials = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
            ],
            __('request.messages'),
            [
                'email' => 'Email',
            ]
        );

        if($credentials->fails()){
            return response()->json(['status' => false, 'error' => $credentials->errors()->first()]);
        }

        $envFile = base_path('.env');
        $envContent = file_get_contents($envFile);

        $envContent = preg_replace("/^MAIL_TO=.*/m", "MAIL_TO={$credentials->validated()['email']}", $envContent);

        File::put($envFile, $envContent);

        return response()->json(['status' => true, 'message' => 'Cập nhật thành công']);
    }
}
