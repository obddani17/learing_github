<?php

namespace App\Models;

// use App\Models\users; 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class types extends Model
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
    public function users(){
        return $this->hasMany(Users::class, 'type_id', 'id');
    }
    public function sub_jobs(){
        return $this->hasMany(sub_jobs::class, 'type_id', 'id');
    }
}
