<?php

namespace App\Http\Controllers;

use App\Models\teachers;
use Illuminate\Http\Request;

class gethodteacher extends Controller
{
    public function index()
    
    {   
        // $typesn = users::get();
        $gethodteachers = teachers::orderby('tea_name','asc')->with(['departments' => function($q){
            $q -> select('departments.id','dep_name');
        }])->get();
        // $gethodteachers = $gethodteachers->departments;
        $d = 0;
        // $gethoddep = teachers::orderby('tea_name','asc')->with(['departments' => function($q){
        //     $q -> select('dep_name');
        // }])->get();
        return view('HOD/HOD-add-teacher', compact('gethodteachers','d'));
    }
}
