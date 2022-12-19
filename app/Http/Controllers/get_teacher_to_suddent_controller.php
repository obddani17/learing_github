<?php

namespace App\Http\Controllers;

use App\Models\result;
use App\Models\students;
use App\Models\subjects;
use App\Models\departments;
use Illuminate\Http\Request;

class get_teacher_to_suddent_controller extends Controller
{
    public function index(Request $request)
    
    {   
        // $typesn = users::get();
        // $get_teacher_to_suddent_controllers = students::orderby('stud_name','asc')->where('level','اول')->with('departments')->get();
        // return $get_teacher_to_suddent_controllers;
        $get_teacher_to_suddent_controllers = students::where('department_id',$request->dep_id)->where('level',$request->neme_level)->get();
        // return $get_teacher_to_suddent_controllers[0]->stud_name;
        // $gethodteachers = $gethodteachers->departments;
        // return $get_teacher_to_suddent_controllers;
        $d = 0;
        return view('teacherpages/Teacher_recoeding', compact('get_teacher_to_suddent_controllers','d'));
    }

    public function indexx(Request $request)
    
    {   
        
        // return $request->vv;
        $getsubjects = subjects::get();
        // return $getsubjects;
        foreach($getsubjects as $getsubject)
        {
            if($getsubject->sub_name == $request->subject_name && $getsubject->department_id == 1)
            {
                $ssss = $getsubject->id;
                $result = result::insert([
                    'student_id' => $request->vv3,
                    'subject_id' => $ssss,
                    'theory' => 0,
                    'practical' => $request->kk3,
                    'final' => 0,
                    'result_total' =>0
                    ]);
            }

        }




        

        $get_teacher_to_suddent_controllers = students::where('department_id',$request->dep_id)->where('level',$request->neme_level)->get();
        $d = 0;
        return view('teacherpages/Teacher_recoeding', compact('get_teacher_to_suddent_controllers','d'));
    }
    public function veiwss(Request $request)
    
    {   
        $getsubjectid = subjects::where('sub_name',$request->subject_name)->where('department_id',$request->dep_id)->get();
        foreach($getsubjectid as $getsubjecti)
        {

           $sss = $getsubjecti->id;
        }

        // $typesn = users::get();
        // $get_teacher_to_suddent_controllers = students::orderby('stud_name','asc')->where('level','اول')->with('departments')->get();
        // return $get_teacher_to_suddent_controllers;
        $get_teacher_to_suddent_controllers = students::where('department_id',$request->dep_id)->where('level',$request->neme_level)->get();
        // return $get_teacher_to_suddent_controllers[0]->stud_name;
        // $gethodteachers = $gethodteachers->departments;
        // return $get_teacher_to_suddent_controllers;
        $getresults = result::where('subject_id',$sss)->get();
        $d = 0;
        return view('teacherpages/Teacher_page1', compact('get_teacher_to_suddent_controllers','d','getresults','getsubjectid'));
    }
}
