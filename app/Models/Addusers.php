<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addusers extends Model
{
    use HasFactory;
    public $table = 'users';
    protected $fillable = [
        'id',
        'password',
        'email',
        'type_id',
    ];
    protected $hidden =[
        'created_at',
        'updated_at'
    ];
    public function user(){
        return $this->hasone(Addnewstudent::class, 'user_id');
    }
}
