<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
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
        DB::table('users')->insert(array(
          'documento' => "1053809320",
          'nombre' => "Alvaro",
          'apellido' => "Castaño",
          'telefono' => "3137052593",
          'email' => "alvarocastano6@gmail.com",
          "password"=>Hash::make('123456'),
          'tipo'  => 'adm',
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('users')->insert(array(
          'documento' => "1053809321",
          'nombre' => "Jorge",
          'apellido' => "Lopez",
          'telefono' => "3137252569",
          'email' => "jorge@gmail.com",
          "password"=>Hash::make('123456'),
          'tipo'  => 'adm',
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('users')->insert(array(
          'documento' => "15236598",
          'nombre' => "Pepito",
          'apellido' => "Perez",
          'telefono' => "3215689698",
          'email' => "pepito@gmail.com",
          "password"=>Hash::make('123456'),
          'tipo'  => 'usu',
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('users')->insert(array(
          'documento' => "30324589",
          'nombre' => "Luz",
          'apellido' => "Casilla",
          'telefono' => "3135695698",
          'email' => "luz@gmail.com",
          "password"=>Hash::make('123456'),
          'tipo'  => 'usu',
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));

      Model::reguard();
    }
}
