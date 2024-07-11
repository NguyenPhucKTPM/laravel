<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        
    }

    public function login(){
        return view('login',[
            'title' => 'Đăng nhập',
        ]);
    }
    public function signin(AuthRequest $request){
        $credentials = [
            'userName' => $request ->input('userName'),
            'password' => $request ->input('password')
        ];
        if(Auth::attempt($credentials)){
            return redirect()->route('admin')->with('success','Đăng nhập thành công');
        }
        return redirect()->route('login')->with('error','Tài khoản hoặc mật khẩu không đúng');
    }
    
    public function register(){
        return view('register',[
            'title' => 'Đăng ký',
        ]);
    }
    public function signup(RegisterRequest $request){
        $user = User::create([
            'userName' => $request->userName,
            'email' => $request->email,
            'fullName' => $request->fullName,
            'sex' => $request->sex,
            'SDT' => $request->SDT,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('login')->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}