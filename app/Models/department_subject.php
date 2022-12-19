<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department_subject extends Model
{
    use HasFactory;
    public $table = 'department_subject';
    protected $fillable = [
        'id',
        'subject_id',
        'department_id'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'    
    ];
}
