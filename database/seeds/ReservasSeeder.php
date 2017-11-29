<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Model;

class ReservasSeeder extends Seeder
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
        DB::table('reservas')->insert(array(
          'id_Cancha' => 1,
          'id_Usuario' => 1,
          'observacion' => "Reserva agregada con seeder usu 1 cancha 1",
          'hora_Inicial' => "19:00:00",
          'hora_Final' => "20:00:00",
          'dia' => "2018-11-29",
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('reservas')->insert(array(
          'id_Cancha' => 2,
          'id_Usuario' => 1,
          'observacion' => "Reserva agregada con seeder usu 1 cancha 2",
          'hora_Inicial' => "07:00:00",
          'hora_Final' => "08:00:00",
          'dia' => "2018-05-02",
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('reservas')->insert(array(
          'id_Cancha' => 1,
          'id_Usuario' => 3,
          'observacion' => "Reserva agregada con seeder usu 3 canha 1",
          'hora_Inicial' => "17:00:00",
          'hora_Final' => "18:00:00",
          'dia' => "2018-03-04",
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('reservas')->insert(array(
          'id_Cancha' => 3,
          'id_Usuario' => 4,
          'observacion' => "Reserva agregada con seeder usu 4 cancha 3",
          'hora_Inicial' => "15:00:00",
          'hora_Final' => "16:00:00",
          'dia' => "2018-05-29",
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('reservas')->insert(array(
          'id_Cancha' => 4,
          'id_Usuario' => 2,
          'observacion' => "Reserva agregada con seeder usu 2 cancha 4",
          'hora_Inicial' => "13:00:00",
          'hora_Final' => "14:00:00",
          'dia' => "2018-03-15",
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));

      Model::reguard();
    }
}
