<?php

namespace App\Http\Controllers;

use App\Models\subjects;
use App\Models\teachers;
use Illuminate\Http\Request;
use App\Models\subject_teacher;

class subject_teacher_controller extends Controller
{
    public function index()
    
    {   
        $posthod_checkk_subject_teacher = subject_teacher::get();
        $posthodsubject_teacher = subjects::with(['teachers' => function($q){
                $q -> select('tea_name','teachers.id');
            }])->get();
        // $gethodteachers = $gethodteachers->departments;
        $d = 0;
        $s = 0;
        // $gethoddep = teachers::orderby('tea_name','asc')->with(['departments' => function($q){
        //     $q -> select('dep_name');
        // }])->get();
        return view('HOD/HOD-add-jusitfiy', compact('posthodsubject_teacher','d','s','posthod_checkk_subject_teacher'));
    }

    public function indexx(Request $request)
    
    {
       
        #########################################################
        $check_subjects = subjects::get(); 
        foreach($check_subjects as $check_subject)
        {
            if($check_subject->sub_name == $request->subject_name && $check_subject->department_id == 1)
            {
                $SS = $check_subject->id;
            }
        }
        $check_teachers = teachers::get();
        foreach($check_teachers as $check_teacher)
        {
            if($check_teacher->tea_name == $request->teacher_name)
            {
                $TT =$check_teacher->id;
            }

        }
        
                
        
        ##############################################################################################3

                if($request->type_sub == 2)
                {       
                    $getsubjects = subjects::get();
                    foreach($getsubjects as $getsubject)
                    {
                        if($getsubject->sub_name == $request->subject_name && $getsubject->department_id == 1)
                        {
                            $getsubjectid = $getsubject->id;

                            if($getsubject->practical_box == 2)
                            {
                                $getteacherid = teachers::get();
                                foreach($getteacherid as $getteacheri)
                               {
                                     if($getteacheri->tea_name == $request->teacher_name)
                                    {   
                                        $teach_sub_checks = subject_teacher::get();
                                        foreach($teach_sub_checks as $teach_sub_check)
                                        {
                                            if($teach_sub_check->subject_type == $request->type_sub && $teach_sub_check->subject_id == $SS  && $teach_sub_check->teacher_id == $TT)
                                            {
                                                return 'تم ربط هذا المعلم بهذه المادة من قبل';
                                            }elseif($teach_sub_check->subject_id == $SS && $teach_sub_check->subject_type == $request->type_sub) 
                                            {
                                                return 'هذه المادة مكتملة الربط';
                                            }elseif($teach_sub_check->subject_id == $SS && $teach_sub_check->subject_type == 1)
                                            {
                                                $teacherid = $getteacheri->id;                                           
                                                $addteachers = subject_teacher::insert([
                                                'subject_type' => $request->type_sub,
                                                'marks' => $request->markes,
                                                'validation' => 1,
                                                'subject_id' =>$getsubjectid,
                                                'teacher_id' => $teacherid,
                                                ]);
                                                return 'تم الحفظ';
                                                return redirect()->back();

                                            }   
                                        }
                                        // $teacherid = $getteacheri->id;                                           
                                        // $addteachers = subject_teacher::insert([
                                        // 'subject_type' => $request->type_sub,
                                        // 'marks' => $request->markes,
                                        // 'validation' => 1,
                                        // 'subject_id' =>$getsubjectid,
                                        // 'teacher_id' => $teacherid,
                                        // ]);
                                        return 'اربط النظري اولا';
                                        return redirect()->back();
                                    }    
                                }
                                return ' اسم المدرس غير موجود';
                            }
                            return ' ليس لها جانب عملي ';
                        }
                    }
                    return ' اسم المادة غير موجود في هذا القسم';
                    
                }
                else
                {
                   $getsubjects = subjects::get();
                    foreach($getsubjects as $getsubject)
                    {
                       if($getsubject->sub_name == $request->subject_name && $getsubject->department_id == 1)
                       {
                           $getsubjectid = $getsubject->id;

                           $getteacherid = teachers::get();
                            foreach($getteacherid as $getteacheri)
                            {
                                 if($getteacheri->tea_name == $request->teacher_name )
                                {
                                    $teach_sub_checks = subject_teacher::get();
                                    foreach($teach_sub_checks as $teach_sub_check)
                                    {
                                        if($teach_sub_check->subject_type == $request->type_sub && $teach_sub_check->subject_id == $SS  && $teach_sub_check->teacher_id == $TT)
                                        {
                                            return 'تم ربط هذا المعلم بهذه المادة من قبل';
                                        }elseif($teach_sub_check->subject_id == $SS && $teach_sub_check->subject_type ==$request->type_sub)
                                        {
                                            return 'هذه المادة مكتملة الربط';
                                        }
                                    }
                                     $teacherid = $getteacheri->id;
                                     $addteachers = subject_teacher::insert([
                                    'subject_type' => $request->type_sub,
                                    'marks' => $request->markes,
                                    'validation' => 1,
                                    'teacher_id' => $teacherid,
                                    'subject_id' =>$getsubjectid,
                                    ]);
                                 //    return $f;
                                     return 'تم الحفظ';
                                     return redirect()->back();
                                }    
                            }
                            return ' اسم المدرس غير موجود';
                        }
                    }
                return ' اسم المادة غير موجود';
                }
            
        
        
    }
}
