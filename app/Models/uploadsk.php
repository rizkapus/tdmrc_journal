<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploadsk extends Model
{
    protected $table = "sk";
    protected $primaryKey = "id";
    protected $fillable = ['id','nama','tanggal_terbit','jenis_sk','file'];
}

