<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploadsuratkeluar extends Model
{
    protected $table = "surat_keluar";
    protected $primaryKey = "id";
    protected $fillable = ['id','no_surat','penerima','tanggal_surat',
                            'pengolah', 'disposisi','file','verified'];
}
