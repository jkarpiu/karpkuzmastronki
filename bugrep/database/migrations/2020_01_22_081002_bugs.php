<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bugs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bugs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->default(' Anon');
            $table->integer('userID')->default(-1);
            $table->string('name') -> default(' ');
            $table->longText('desc')-> default(' ');
            $table->longText('situation')-> default(' ');
            $table->string('user_ip_remote') -> default(' ');
            $table->string('user_ip_http') -> default(' ');
            $table->boolean('fixed') -> default(0);
            $table->string('fixedBy') -> default('notFixed');
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
