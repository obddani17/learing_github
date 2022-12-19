<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;
    public $table = 'types';
    protected $fillable = [
        'id',
        'type_name'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'
    ];

    // public function user()
    // {
    //     return $this->hasMany(users::class, 'type_id');
    // } 
}
