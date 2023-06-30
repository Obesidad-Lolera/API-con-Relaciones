<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habita', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("animal_id");
            $table->unsignedBigInteger("bioma_id");
            $table->foreign('animal_id')->references('id')->on('animales');
            $table->foreign('bioma_id')->references('id')->on('biomas');
            $table->unique(['animal_id','bioma_id']);
            $table->softDeletes();
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
        Schema::dropIfExists('habitas');
    }
}
