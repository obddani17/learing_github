<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_jobs extends Model
{
    use HasFactory;
    public $table = 'sub_jobs';
    protected $fillable = [
        'id',
        'name',
        'email	',
        'user_id',
        'type_id'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'
    ];
    public function types(){
        return $this->belongsTo(types::class, 'type_id');
    }
    public function users(){
        return $this->belongsTo(Users::class, 'user_id');
    }
}
