<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Model;

class PreciosSeeder extends Seeder
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
        DB::table('precios')->insert(array(
          'id_Cancha' => 1,
          'precio' => 150000,
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('precios')->insert(array(
          'id_Cancha' => 2,
          'precio' => 75000,
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('precios')->insert(array(
          'id_Cancha' => 3,
          'precio' => 120000,
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('precios')->insert(array(
          'id_Cancha' => 4,
          'precio' => 80000,
          'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
        ));

      Model::reguard();
    }
}
