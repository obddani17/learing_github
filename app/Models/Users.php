<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends User
{
    use HasFactory;
    public $table = 'users';
    protected $fillable = [
        'id',
        'email',
        'password',
        'type_id',
    ];
    protected $hidden =[
        'created_at',
        'updated_at'
    ];
    public function types(){
        return $this->belongsTo(types::class, 'type_id');
    }
    public function students(){
        return $this->hasone(students::class, 'user_id', 'id');
    }
    public function teachers(){
        return $this->hasone(teachers::class, 'user_id', 'id');
    }
    public function sub_jobs(){
        return $this->hasone(sub_jobs::class, 'user_id', 'id');
    }
    public function HODs(){
        return $this->hasone(HODs::class, 'user_id', 'id');
    }
    public function secretaries(){
        return $this->hasone(secretaries::class, 'user_id', 'id');
    }
}
