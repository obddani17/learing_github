<?php

namespace App\Http\Controllers;

use App\Models\HODs;
use App\Models\Users;
use App\Models\teachers;
use Illuminate\Http\Request;
use App\Models\department_teacher;

class adminpagecontroller extends Controller
{
    public function index()
    
    {   
        $showteachers = teachers::orderby('tea_name','asc')->with(['departments' => function($q){
            $q -> select('dep_name','departments.id');
        }])->get();
        $d = 0;
        
        return view('ADMIN/Teacher', compact('showteachers','d'));
    }

    public function gethod()
    
    {   
        $showhods = HODs::orderby('HOD_name','asc')->with(['departments' => function($q){
            $q -> select('dep_name','departments.id');
        }])->get();
        $d = 0;
        
        return view('ADMIN/Insert-HOD', compact('showhods','d'));
    }

    public function getteacher()
    
    {   
        $showteacher = teachers::orderby('tea_name','asc')->with(['departments' => function($q){
            $q -> select('dep_name','departments.id');
        }])->get();
        $d = 0;
        
        return view('ADMIN/Insert-Teacher', compact('showteacher','d'));
    }

    public function updateteacher()
    {
      $updateteacher = teachers::where('email', $email)
      ->update(
          ['tea_name' => $request->name_teacher],
          ['qualification' => $request->qualifications],
          ['number' => $request->number],
    );
      $updateteacher = Users::where('id', $id)
      ->update(
          ['email' => $request->mail]
    );
      return redirect()->back();
    //   return redirect()->to('/');
    }

    public function addHOD(Request $request)
    {   
        $typesn = Users::get();
        foreach($typesn as $types)
        {
            if($types->email == $request->mail)
            {
                return 'the email is find in database';
            }
        }
        $num = 1;
        foreach($typesn as $typ){
            $typ ->id;
            $num++; 
        }
        $numpass = 123456 +$num;;
        $adduser = Users::insert([
            'password'=> $numpass,
            'email'=>$request->mail,
            'type_id'=> 3
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

        $addstudents = HODs::insert([
            'HOD_name' => $request->name_HOD,
            'email' => $request->mail,
            'user_id' =>$userid,
            'department_id' => $request->department_HOD
        ]);
        return redirect()->back();
    }

    public function addteacher(Request $request)
    {   
            $typesn = Users::get();
            $numberteacher = teachers::get();
            foreach($typesn as $types )
        {
            if($types->email == $request->tea_email)
            {
                return 'the email is find in database';
            }
        }
            $num = 1;
            foreach($typesn as $typ){
                $typ ->id;
                $num++; 
            }
            $numpass = 123456 +$num;;
            $adduser = Users::insert([
                'password'=> $numpass,
                'email'=>$request->tea_email,
                'type_id'=> 4
                ]);
                
                $types = Users::get();
                $userid=1;
                $sss = $types;
                foreach($sss as $ss){
                    $ss -> email.'<br>';
                    if($ss -> email == $request->tea_email)
                    {
                        $userid = $ss -> id;
                        
                    }
                };
                
                
                $addteachers = teachers::insert([
                    'tea_name' => $request->teacher_name,
                    'qualification' => $request->tea_qualification,
                    'number' => $request->tea_number,
                    'email' => $request->tea_email,
                    'user_id' =>$userid
                    ]);
                
                $teach = teachers::get();
                $teatcherid=1;
                $ttt = $teach;
                foreach($ttt as $ss){
                    if($ss -> email == $request->tea_email)
                    {
                        $teatcherid = $ss -> id;
                        
                    }
                };
                $departmentid = [$request->dep_id1,$request->dep_id2,$request->dep_id3,$request->dep_id4,$request->dep_id5,$request->dep_id6];
                foreach($departmentid as $departmenti){
                    if(isset($departmenti)){
                    
                        $adddep_tea = department_teacher::insert([
                            'teacher_id' => $teatcherid,
                            'department_id' => $departmenti
                            ]);
                        }
                }
                
    return redirect()->back();
    }
}
