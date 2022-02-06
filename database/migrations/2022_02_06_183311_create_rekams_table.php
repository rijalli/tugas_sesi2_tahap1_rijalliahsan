<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekams', function (Blueprint $table) {
            $table->id();
            $table->string('Id_pasien', 10);
            $table->string('nama_pasien', 25);
            $table->string('keluhan', 100);
            $table->string('diagnosa', 50);
            $table->string('resep', 50);
            $table->date('tanggal_periksa');
            $table->string('id_dokter', 10);
            $table->string('nama_dokter', 25);
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
        Schema::dropIfExists('rekams');
    }
}
