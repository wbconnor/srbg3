<?php

use Illuminate\Database\Seeder;

class PedalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pedals')->delete();

      $pedals = array(
        array(
          //1
            'model' => 'CSL Elite Pedals',
            'description' => 'High quality materials and customizable. Clutch pedal option and brake load cell upgrade available.',
            'clutch' => 0,
            'resolution' => 12,
            'brand_id' => 3,
            'tension_id' => 3,
            'mount_id' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          //2
            'model' => 'CSL Elite Pedals LC',
            'description' => 'Fully loaded CSL Elite pedals with clutch and brake load cell upgrades. USB adapter included.',
            'clutch' => 1,
            'resolution' => 16,
            'brand_id' => 3,
            'tension_id' => 4,
            'mount_id' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          //3
            'model' => 'ClubSport Pedals V3 USA',
            'description' => 'High resolution pedals with magnetic and contactless sensors on gas and clutch for a long life and maximum performance.',
            'clutch' => 1,
            'resolution' => 12,
            'brand_id' => 3,
            'tension_id' => 4,
            'mount_id' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          //4
            'model' => 'ClubSport Pedals V3 inverted',
            'description' => 'Realism to the max - that\'s the ideology of these inverted pedals. ​Pivot points, ​arrangement, distances and overall feeling, just like in a real car!',
            'clutch' => 1,
            'resolution' => 12,
            'brand_id' => 3,
            'tension_id' => 4,
            'mount_id' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          //5
            'model' => 'Tilton 600',
            'description' => 'Hydraulic based brake system offers realistic pedal travel and effort utilizing hydraulic pressure sensing rather than travel or displacement for output to computer system.',
            'clutch' => 1,
            'resolution' => null,
            'brand_id' => 9,
            'tension_id' => 4,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          //6
            'model' => 'Tilton 900',
            'description' => 'Featuring the latest in pivot-mount master cylinder technology that offers the ultimate in balance bar efficiency which we use for cockpit adjustable pedal feel adjustment, providing exceptional driver feedback and ultra precise and repeatable braking.',
            'clutch' => 1,
            'resolution' => null,
            'brand_id' => 9,
            'tension_id' => 4,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          //7
            'model' => 'Sim Pedals Pro',
            'description' => 'A strong, stiff, compact and durable design using custom developed 12bit USB electronics for an instant and accurate response.',
            'clutch' => 1,
            'resolution' => 12,
            'brand_id' => 8,
            'tension_id' => null,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          //8
            'model' => 'Sim Pedals Ultimate',
            'description' => 'Fully adjustable pedal geometry and pedal force & adjustable hydraulic damping on every individual pedal.',
            'clutch' => 1,
            'resolution' => 12,
            'brand_id' => 8,
            'tension_id' => null,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          //9
            'model' => 'GTPRO1 Floor Mount',
            'description' => 'The latest revision to these pedals is based on the legendary Wilwood pedal frame for the brake and clutch pedals. Get the feel of real GT style pedals from the GTpro1 pedals.',
            'clutch' => 1,
            'resolution' => null,
            'brand_id' => 7,
            'tension_id' => 4,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          //10
            'model' => 'GTPRO1 Overhung',
            'description' => 'Inverted, hanging version of the GTPRO1',
            'clutch' => 1,
            'resolution' => null,
            'brand_id' => 7,
            'tension_id' => 4,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          //11
            'model' => 'GTPRO3 Xtreme Tilton',
            'description' => 'Built off of Tilton 600 pedal frame, a no-compromis R&D process was applied to all aspects of GTPRO3 pedal development.',
            'clutch' => 1,
            'resolution' => null,
            'brand_id' => 7,
            'tension_id' => 4,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          //12
            'model' => 'T3PA',
            'description' => '100% metal pedals and internal structure. Fully adjustable. Includes optional Conical Rubber Brake Mod.',
            'clutch' => 1,
            'resolution' => 10,
            'brand_id' => 1,
            'tension_id' => 2,
            'mount_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          //13
            'model' => 'T3PA-PRO',
            'description' => 'Two different positions: floor-mounted or suspended. 100% metal and 100% adjustable. Includes 2 different changeable mods for the brake.',
            'clutch' => 1,
            'resolution' => 10,
            'brand_id' => 1,
            'tension_id' => 2,
            'mount_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
      );
      DB::table('pedals')->insert($pedals);
    }
}
