<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploadsuratmasuk extends Model
{
    protected $table = "surat_masuk";
    protected $primaryKey = "id";
    protected $fillable = ['id','no_surat','pengirim','tanggal_surat',
                            'pengolah', 'disposisi','file','verified'];
}
