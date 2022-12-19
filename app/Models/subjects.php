<?php

namespace App\Models;

use App\Models\teachers;
use App\Models\departments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class subjects extends Model
{
    use HasFactory;
    public $table = 'subjects';
    protected $fillable = [
        'id',
        'sub_name',
        'department_id',
        'level',
        'term',
        'start_year',
        'end_year',
        'final',
        'sub_total',
        'sub_time',
        'practical_box'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'
    ];
    // public function departments(){
    //     return $this -> belongstomany(departments::class, 'department_subject','subject_id','department_id');
    // }
    public function departments(){
        return $this->belongsTo(departments::class, 'department_id');
    }
    public function teachers(){
        return $this -> belongstomany(teachers::class, 'subject_teacher','subject_id','teacher_id');
    }
    public function result(){
        return $this->hasMany(result::class, 'subject_id', 'id');
    }
    public function complaints(){
        return $this->hasMany(complaints::class, 'subject_id', 'id');
    }
}

