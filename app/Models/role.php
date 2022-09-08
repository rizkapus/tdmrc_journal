<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table = "users_role";
    protected $primaryKey = "id";
    protected $fillable = ['id','role'];

    public function users(){
         
        return $this->hasMany(users::class);    
    }
}
