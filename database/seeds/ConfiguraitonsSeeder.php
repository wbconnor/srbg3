<?php

use Illuminate\Database\Seeder;

class ConfiguraitonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('configurations')->delete();

      $configurations = array(
        array(
            'name' => 'Sequential',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'name' => 'H Gate 7 + R',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'name' => 'H Gate 6 + R',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'name' => 'Offset Gate 6 + R',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
      );
      DB::table('configurations')->insert($configurations);
    }
}
