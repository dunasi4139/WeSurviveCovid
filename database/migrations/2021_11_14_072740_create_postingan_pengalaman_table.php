<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostinganPengalamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postingan_pengalaman', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('judul');
            $table->string('gambar');
            $table->text('isi');
            $table->integer('user_id');
            $table->integer('like');
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
        Schema::dropIfExists('postingan_pengalaman');
    }
}
