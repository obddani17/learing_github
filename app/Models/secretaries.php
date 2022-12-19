<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secretaries extends Model
{
    use HasFactory;
    public $table = 'secretaries';
    protected $fillable = [
        'id',
        'sec_name',
        'email	',
        'user_id'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'
    ];
    public function users(){
        return $this->belongsTo(Users::class, 'user_id');
    }
}
