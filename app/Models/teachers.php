<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    use HasFactory;
    public $table = 'teachers';
    protected $fillable = [
        'id',
        'tea_name',
        'qualification',
        'number',
        'email',
        'user_id'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'
    ];


    public function users(){
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function departments(){
        return $this -> belongstomany(departments::class, 'department_teacher','teacher_id','department_id');
    }

    public function subjects(){
        return $this -> belongstomany(subjects::class, 'subject_teacher','teacher_id','subject_id');
    }
}
