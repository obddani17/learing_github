<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addnewstudent extends Model
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
    
}
