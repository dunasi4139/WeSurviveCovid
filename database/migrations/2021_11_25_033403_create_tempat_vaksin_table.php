<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatVaksinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_vaksin', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('syarat');
            $table->string('jadwal');
            $table->string('alamat');
            $table->string('jenis');
            $table->integer('province_id');
            $table->timestamps();

            $table->foreign('province_id')->references('id')->on('provinces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempat_vaksin');
    }
}
