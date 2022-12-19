<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    use HasFactory;
    public $table = 'result';
    protected $fillable = [
        'id',
        'student_id',
        'subject_id',
        'theory',
        'practical',
        'final',
        'result_total'
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
