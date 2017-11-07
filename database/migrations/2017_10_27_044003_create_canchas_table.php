<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanchasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canchas', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->integer('id_Usuario')->unsigned();
            $table->string('nombre', 15);
            $table->double('ancho', 15);
            $table->double('largo', 15);
            $table->text('descripcion', 500);
            $table->binary('imagen')->null();

            $table->foreign('id_Usuario')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('canchas');
    }
}
