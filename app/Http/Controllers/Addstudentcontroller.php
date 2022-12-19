<?php

namespace App\Http\Controllers;

use App\Models\type;
use App\Models\types;
use App\Models\Users;
use App\Models\Addusers;
use App\Models\students;
use App\Models\departments;
use Illuminate\Http\Request;
use App\Models\Addnewstudent;
// use Illuminate\Support\Facades\DB;
class Addstudentcontroller extends Controller
{
    public function index()
    
    {   
        // $addnamedep = departments::get();
        $addstudents = students::orderby('stud_name','asc')->with('departments')->get();
        $d = 0;
        // $depname = departments::get();
            //  = $adddepname -> dep_name;
           return view('secretarypages/secretary-add-student', compact('addstudents','d'));
    }
    public function addstud(Request $request)
    {   
        $typesn = Users::get();
        $num = 1;
        foreach($typesn as $typ){
            $typ ->id;
            $num++; 
        }
        $numpass = 123456 +$num;;
        $adduser = Users::insert([
            'password'=> $numpass,
            'email'=>$request->email_stud,
            'type_id'=> 1
        ]);
        
        $types = Users::get();
        $userid=1;
        $sss = $types;
        // return $types ;
        foreach($sss as $ss){
         $ss -> email.'<br>';
        if($ss -> email == $request->email_stud)
        {
         $userid = $ss -> id;

        }
        };

        

        $addstudents = students::insert([
            'id' => $request->stud_id ,
            'stud_name' => $request->stud_name,
            'department_id' => $request->department_stud,
            'level' => $request->level_stud,
            'email' => $request->email_stud,
            'user_id' =>$userid
        ]);
        return redirect()->back();
    }
}
