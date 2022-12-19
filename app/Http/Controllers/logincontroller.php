<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function index(request $request)
    {
        // request()->valiate([
        //     'email_login' => 'required',
        //     'pass_login' => 'required'
        // ]);
        // return ' kllk';
        $info = $request->only('email','password');
        if(Auth::attempt($info))
        {
            return redirect()->to('/s');
        }
        $ddd = 'كلمة السر او الايميل خطا';
        return view('LOGIN/index', compact('ddd'));
        // return redirect()->to('/');
        // return 'jjm';
        // return view('LOGIN/index');
        // $users = users::get();
        // foreach($users as $user)
        // {
        //     // return $user->email;
        //     if($user->email == $request->email)
        //     {
        //         return 'ok';
        //         $update = users::where('email', $request->email)
        //         ->update(['email' => hash::make($request->pass)]);
        //     }
        // }
        //     return 'قم بطلب تسجيل اولا';
        
    }
}
