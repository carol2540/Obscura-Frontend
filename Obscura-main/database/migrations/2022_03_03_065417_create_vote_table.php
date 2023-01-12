<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('gallery_id');
            $table->timestamps();

            $table->primary(array('gallery_id','user_id'));
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('gallery_id')->references('id')->on('gallery');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vote');
    }
}
