<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = ['id','name','email','username','role_id'];

    public function role()
    {
       return $this->belongsTo(role::class);
    }
}
