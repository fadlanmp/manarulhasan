<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitabs', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Kitab');
            $table->string('Pengarang');
            $table->tinyInteger('kelas');
            $table->string('Ustad_Pengajar');
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
        Schema::dropIfExists('kitabs');
    }
};
