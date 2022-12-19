<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    public $table = 'students';
    protected $fillable = [
        'id',
        'stud_name',
        'department_id',
        'level',
        'email',
        'user_id'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'
    ];
    public function departments(){
        return $this->belongsTo(departments::class, 'department_id');
    }
    public function users(){
        return $this->belongsTo(Users::class, 'user_id');
    }
    public function result(){
        return $this->hasMany(result::class, 'student_id', 'id');
    }
    public function complaints(){
        return $this->hasMany(complaints::class, 'student_id', 'id');
    }
}
