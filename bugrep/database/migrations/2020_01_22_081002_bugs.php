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
            $table->string('name') -> default(' ');
            $table->longText('desc')-> default(' ');
            $table->longText('situation')-> default(' ');
            $table->string('user_ip_remote') -> default(' ');
            $table->string('user_ip_http') -> default(' ');
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
