<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 20);
            $table->string('nama', 100);
            $table->date('tanggal_lahir');
            $table->date('tanggal_daftar');
            $table->string('alamat', 200);
            $table->string('telp', 15);
            $table->string('pekerjaan', 25);
            $table->string('jenis_kelamin', 25);
            $table->string('nama_orangtua', 100);
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
        Schema::dropIfExists('pasiens');
    }
}
