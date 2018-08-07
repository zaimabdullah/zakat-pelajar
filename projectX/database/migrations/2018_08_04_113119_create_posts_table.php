<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pelajar');
            $table->string('no_telefon');
            $table->integer('no_matrik');
            $table->string('fakulti');
            $table->string('kod_program');
            $table->float('cgpa');
            $table->string('penjaga');
            $table->float('gaji');
            $table->integer('tanggungan');
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
        Schema::dropIfExists('posts');
    }
}
