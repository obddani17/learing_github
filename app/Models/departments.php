<?php

namespace App\Models;

use App\Models\subjects;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class departments extends Model
{
    use HasFactory;
    public $table = 'departments';
    protected $fillable = [
        'id',
        'dep_name'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'    
    ];
    public function students(){
        return $this->hasMany(students::class, 'department_id', 'id');
    }
    public function teachers(){
        return $this -> belongstomany(teachers::class, 'department_teacher','department_id','teacher_id');
    }
    // public function subjects(){
    //     return $this -> belongstomany(subjects::class, 'department_subject','department_id','subject_id');
    // }
    public function subjects(){
        return $this->hasMany(subjects::class, 'department_id', 'id');
    }
    public function HODs(){
        return $this->hasOne(HODs::class, 'department_id', 'id');
    }
    
}
