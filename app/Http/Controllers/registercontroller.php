<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class registercontroller extends Controller
{
    public function index(request $request)
    {
        
        $users = Users::get();
        foreach($users as $user)
        {
            // return $user->email;
            if($user->email == $request->email_reg)
            {   
                // return 'ok';
                $update = Users::where('email', $request->email_reg)
                ->update(['password' => Hash::make($request->pass_reg)]);
                return redirect()->to('/');

            }
        }
            return '11قم بطلب تسجيل اولا';
        
    }
    public function checknumber(request $request)
    {
        
        $users = Users::get();
        foreach($users as $user)
        {
            // return $user->email;
            if(1111 == $request->number)
            {
                // return 'ok';
                return redirect()->to('/new');
                // return view('LOGIN/new_password');
                // $update = Users::where('email', $request->email)
                // ->update(['password' => Hash::make($request->pass)]);
            }
        }
        $ddd = 'الرقم الذي ادخلته خطا';
        return view('LOGIN/restart_password', compact('ddd'));
            // return 'قم بطلب تسجيل اولا';
        
    }
    public function regester(request $request)
    {
        // $email = Session::get();
        {   
        $email = Session::get('email');
        
        $users = Users::get();
        foreach($users as $user)
        {
            // return $user->email;
            if($user->email == $email){
                
                // return $email;
                    // return 'ok';
                    $update = Users::where('email', $email)
                    ->update(['password' => Hash::make($request->password)]);
                    return redirect()->to('/');
            }

            }
        }
            return 'قم بطلب تسجيل اولا';
        
    }
    
}