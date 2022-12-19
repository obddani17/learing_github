<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\teachers;
use Illuminate\Http\Request;
use App\Models\department_teacher;
// use App\Http\Requests\postrequestaddteacher;

class Addteachercontroller extends Controller
{
    public function index()
    
    {   
        $addteachers = teachers::orderby('tea_name','asc')->with(['departments' => function($q){
            $q -> select('dep_name','departments.id');
        }])->get();
        $d = 0;
        
        return view('secretarypages/secretary', compact('addteachers','d'));
    }
    
    public function addteach(Request $request)
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
