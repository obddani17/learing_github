<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class forgetcontroller extends Controller
{
    public function indexxx(request $request)
    {
        // $check = $request->email;
        $users = Users::get();
        foreach($users as $user)
        {
            // return $user->email;
            if($user->email == $request->email)
            {
                Session::put('email',$request->email);
                // $check = $request->email;
                return redirect()->to('/restart_p');
                // return view('LOGIN/restart_password');
                // $update = Users::where('email', $request->email)
                // ->update(['password' => Hash::make($request->pass)]);
            }
        }
        $ddd = 'هذا الايميل غير صحيح';
        return view('LOGIN/forget', compact('ddd'));
            // return 
        
    }
}
