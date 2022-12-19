<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject_teacher extends Model
{
    use HasFactory;
    public $table = 'subject_teacher';
    protected $fillable = [
        'id',
        'subject_type',
        'marks',
        'validation',
        'teacher_id',
        'subject_id'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'    
    ];
}
