<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploadjournal extends Model
{
    protected $table = "journal";
    protected $primaryKey = "id";
    protected $fillable = ['id','nama','tanggal_terbit','author','file'];
}
