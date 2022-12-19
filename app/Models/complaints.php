<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complaints extends Model
{
    use HasFactory;
    public $table = 'complaints';
    protected $fillable = [
        'id',
        'comp_type',
        'subject_id',
        'student_id',
        'image'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'
    ];
    public function subjects(){
        return $this->belongsTo(subjects::class, 'subject_id');
    }
    public function students(){
        return $this->belongsTo(students::class, 'student_id');
    }
}
