<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Disc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discs', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('for_id')->default(0);
            $table->string('username')->default(' ');
            $table->integer('userID')->default(0);
            $table->longText('content')->default(' ');
            $table->integer('score')->default(0);
            $table->boolean('fixes')->default(0);
            $table->boolean('active')->default(1);
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
