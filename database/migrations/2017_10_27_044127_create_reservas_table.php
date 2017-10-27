<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->integer('id_Cancha')->unsigned();
            $table->integer('id_Usuario')->unsigned();
            $table->time('hora_Inicial');
            $table->time('hora_Final');
            $table->date('dia');

            $table->foreign('id_Cancha')->references('id')->on('canchas')->ondelete('cascade');
            $table->foreign('id_Usuario')->references('id')->on('users')->ondelete('cascade');
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
        Schema::dropIfExists('reservas');
    }
}
