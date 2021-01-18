<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakeup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makeup', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->string('wedding');
            $table->string('event');
            $table->string('prom');
            $table->string('photoshoot');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makeup');
    }
}
