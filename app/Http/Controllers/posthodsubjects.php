<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\subjects;
use App\Models\teachers;
use Illuminate\Http\Request;
use App\Models\department_subject;
use App\Models\department_teacher;

class posthodsubjects extends Controller
{
    public function index()
    
    {   
        // $typesn = users::get();
        $posthodsubjects = subjects::with('departments')->get();
        // $gethodteachers = $gethodteachers->departments;
        $d = 0;
        // $gethoddep = teachers::orderby('tea_name','asc')->with(['departments' => function($q){
        //     $q -> select('dep_name');
        // }])->get();
        return view('HOD/HOD-add-subjectes', compact('posthodsubjects','d'));
    }
    public function indexx(Request $request)
    
    {
        if(isset($request->check_boxs)){

            $addteachers = subjects::insert([
                'sub_name' => $request->subject_name,
                'department_id' => 1,
                'level' => $request->level,
                'term' => $request->term,
                'start_year' => $request->start_year,
                'end_year' =>$request->finsh_year,
                'final' =>$request->final_result,
                'sub_total' =>$request->total_result,
                'sub_time' =>$request->times,
                'practical_box' =>$request->check_boxs
                ]);
                return redirect()->back();
            }else{
            $addteachers = subjects::insert([
                'sub_name' => $request->subject_name,
                'department_id' => 1,
                'level' => $request->level,
                'term' => $request->term,
                'start_year' => $request->start_year,
                'end_year' =>$request->finsh_year,
                'final' =>$request->final_result,
                'sub_total' =>$request->total_result,
                'sub_time' =>$request->times,
                'practical_box' => 1
                ]);
                return redirect()->back();
                }   
        
    //     $teach = subjects::get();
    //     $teatcherid=1;
    //     $ttt = $teach;
    //     foreach($ttt as $ss){
    //         // $ss -> email.'<br>';
    //         if($ss -> sub_name == $request->subject_name && $ss -> level == $request->level)
    //         {
    //             $teatcherid = $ss -> id;
                
    //         }
    //     };
            
    //             $adddep_tea = department_subject::insert([
    //                 'subject_id' => $teatcherid,
    //                 'department_id' => 1
    //                 ]);
    // return redirect()->back();
        
    }
    // public function addteach(Request $request)
    // {   
    //     // if($request->validated()){

    //         $typesn = users::get();
    //         $num = 1;
    //         foreach($typesn as $typ){
    //             $typ ->id;
    //             $num++; 
    //         }
    //         $numpass = 123456 +$num;;
    //         // $typeteacher = $request->
    //         $adduser = users::insert([
    //             'password'=> $numpass,
    //             'email'=>$request->tea_email,
    //             'type_id'=> 4
    //             ]);
                
    //             $types = users::get();
    //             $userid=1;
    //             $sss = $types;
    //             // return $types ;
    //             foreach($sss as $ss){
    //                 $ss -> email.'<br>';
    //                 if($ss -> email == $request->tea_email)
    //                 {
    //                     $userid = $ss -> id;
                        
    //                 }
    //             };
                
                
    //             $addteachers = teachers::insert([
    //                 'tea_name' => $request->teacher_name,
    //                 'qualification' => $request->tea_qualification,
    //                 'number' => $request->tea_number,
    //                 'email' => $request->tea_email,
    //                 'user_id' =>$userid
    //                 ]);
                
    //                 // $teach = teachers::select('id')->where('email',$request->tea_email)->get();
    //             $teach = teachers::get();
    //             $teatcherid=1;
    //             $ttt = $teach;
    //             // return $types ;
    //             foreach($ttt as $ss){
    //                 // $ss -> email.'<br>';
    //                 if($ss -> email == $request->tea_email)
    //                 {
    //                     $teatcherid = $ss -> id;
                        
    //                 }
    //             };
    //             $departmentid = [$request->dep_id1,$request->dep_id2,$request->dep_id3,$request->dep_id4,$request->dep_id5,$request->dep_id6];
    //             foreach($departmentid as $departmenti){
    //                 if(isset($departmenti)){
                    
    //                     $adddep_tea = department_teacher::insert([
    //                         'teacher_id' => $teatcherid,
    //                         'department_id' => $departmenti
    //                         ]);
    //                     }
    //             }
                
    //             //         $departmentid1 = $request->dep_id1;
    //     //         if(isset($departmentid1)){
            
    //     //             $adddep_tea = department_teacher::insert([
    //         //                 'teacher_id' => $teatcherid,
    //     //                 'department_id' => $departmentid1
    //     //                 ]);
    //     //             }
    //     //             $departmentid2 = $request->dep_id2;
    //     //             if(isset($departmentid2)){
            
    //     //         $adddep_tea = department_teacher::insert([
    //     //             'teacher_id' => $teatcherid,
    //     //             'department_id' => $departmentid2
    //     //         ]);
    //     //     }
    //     // $departmentid3 = $request->dep_id3;
    //     // if(isset($departmentid3)){
                
    //         //         $adddep_tea = department_teacher::insert([
    //             //             'teacher_id' => $teatcherid,
    //             //             'department_id' => $departmentid3
    //     //         ]);
    //     //     }
    //     // $departmentid4 = $request->dep_id4;
    //     // if(isset($departmentid4)){
            
    //         //         $adddep_tea = department_teacher::insert([
    //     //             'teacher_id' => $teatcherid,
    //     //             'department_id' => $departmentid4
    //     //         ]);
    //     //     }
    //     // $departmentid5 = $request->dep_id5;
    //     // if(isset($departmentid5)){
                
    //         //         $adddep_tea = department_teacher::insert([
    //     //             'teacher_id' => $teatcherid,
    //     //             'department_id' => $departmentid5
    //     //         ]);
    //     //     }
    //     // $departmentid6 = $request->dep_id6;
    //     // if(isset($departmentid6)){
            
    //     //         $adddep_tea = department_teacher::insert([
    //     //             'teacher_id' => $teatcherid,
    //     //             'department_id' => $departmentid6
    //     //         ]);
    //     //     }

    // // }
    
    // return redirect()->back();
    // }

    // public function addsubject(Request $request)
    // {   
    // }
}
