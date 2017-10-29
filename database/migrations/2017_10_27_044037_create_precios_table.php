<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precios', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->integer('id_Cancha')->unsigned();
            $table->float('precio');
            $table->time('hora_Inicial');
            $table->time('hora_Final');
            $table->date('dia');

            $table->foreign('id_Cancha')->references('id')->on('canchas')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('precios');
    }
}
