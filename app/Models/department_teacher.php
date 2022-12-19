<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department_teacher extends Model
{
    use HasFactory;
    public $table = 'department_teacher';
    protected $fillable = [
        'id',
        'teacher_id',
        'department_id'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'    
    ];
}
