<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_name')->unsigned();
            $table->bigInteger('user_appointment')->unsigned();
            $table->bigInteger('user_makeup')->unsigned();
            
            $table->foreign('user_name')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_appointment')->references('id')->on('appointment')->onDelete('cascade');
            $table->foreign('user_makeup')->references('id')->on('makeup')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
