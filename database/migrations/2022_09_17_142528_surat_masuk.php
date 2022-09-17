<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SuratMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuk', function(Blueprint $table){
            $table->id();
            $table->string('no_surat');
            $table->string('pengirim');
            $table->date('tanggal_surat');
            $table->string('pengolah');
            $table->string('disposisi');
            $table->boolean('verified');
            $table->string('file');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
