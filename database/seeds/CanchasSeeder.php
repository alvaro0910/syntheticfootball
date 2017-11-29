<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Model;

class CanchasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Model::unguard();

      $faker = Faker::create();
        DB::table('canchas')->insert(array(
          'id_Usuario' => 1,
          'nombre' => "Camp Nou",
          'ancho' => 75,
          'largo' => 45,
          'descripcion' => "Cancha agregada con seeder usu 1",
          'imagen' => null,
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('canchas')->insert(array(
          'id_Usuario' => 1,
          'nombre' => "Bellaleda",
          'ancho' => 75,
          'largo' => 45,
          'descripcion' => "Cancha agregada con seeder usu 1",
          'imagen' => null,
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('canchas')->insert(array(
          'id_Usuario' => 2,
          'nombre' => "Stadium Camp",
          'ancho' => 25,
          'largo' => 30,
          'descripcion' => "Cancha agregada con seeder usu 2",
          'imagen' => null,
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('canchas')->insert(array(
          'id_Usuario' => 2,
          'nombre' => "Bernabeu",
          'ancho' => 30,
          'largo' => 80,
          'descripcion' => "Cancha agregada con seeder usu 2",
          'imagen' => null,
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));

      Model::reguard();
    }
}
