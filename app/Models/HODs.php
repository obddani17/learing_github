<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HODs extends Model
{
    use HasFactory;
    public $table = 'HODs';
    protected $fillable = [
        'id',
        'HOD_name',
        'email	',
        'user_id',
        'department_id'
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
}
