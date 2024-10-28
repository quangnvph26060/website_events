<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginUserRequest;

class AuthController extends Controller
{

    public function login()
    {

        return view('backend.auth.login');
    }

    public function authenticate(LoginUserRequest $request)
    {

        $credentials = $request->validated();

        if (auth()->attempt($credentials)) {

            session()->flash('success', 'Xin chào ' . auth()->user()->name);

            return redirect()->route('admin.dashboard');
        } else {
            return response()->json(['status' => false, 'message' => 'Tài khoản hoặc mật khẩu không chính xác!', 'type' => 'error']);
        }
    }

    public function logout()
    {

        auth()->logout();

        session()->flash('success', 'Đăng xuất thành công.');

        return redirect()->route('admin.auth.login');
    }
}
