<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
        CompatibilitiesSeeder::class,
        ConfiguraitonsSeeder::class,
        ConnectionsSeeder::class,
        HardMountSeeder::class,
        TensionsSeeder::class,
        BrandsSeeder::class,
        DrivesSeeder::class,
        BrakesSeeder::class,
        ShiftersSeeder::class,
        PedalsSeeder::class,
        WheelsSeeder::class,
        PicturesSeeder::class,
        CompatibilityWheelSeeder::class,
        ConnectionPedalSeeder::class,
        CompatibilityPedalSeeder::class,
        CompatibilityShifterSeeder::class,
        CompatibilityBrakeSeeder::class,
        ConnectionShifterSeeder::class,
        ConnectionBrakeSeeder::class,
        ConfigurationShifterSeeder::class,
      ]);
    }
}
