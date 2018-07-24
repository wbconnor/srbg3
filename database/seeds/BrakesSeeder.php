<?php

use Illuminate\Database\Seeder;

class BrakesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('brakes')->delete();

      $brakes = array(
        array(
            'model' => 'Handbrake V3',
            'description' => 'Precision construction with shafts and bearings. Compact design and good force torsion springs.',
            'handle_length_inches' => 0,
            'vibration' => 1,
            'brand_id' => 11,
            'tension_id' => 2,
            'mount_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'model' => 'Type 4 Load Cell Handbrake',
            'description' => 'It\'s COMPACT! Our new Type 4 Load Cell handbrake will fit just about anywhere you want! The parts are manufactured using high quality SLS fabrication and are as strong as steel. A 200kg load cell is used to reduce size, footprint and cost.',
            'handle_length_inches' => null,
            'vibration' => null,
            'brand_id' => 9,
            'tension_id' => null,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'model' => 'Type 3 Hydraulic Handbrake',
            'description' => 'It\'s BIG! So make sure you have ample space for this beast. It\'s beautiful! And it\'s AMAZING! It\'s also not cheap.',
            'handle_length_inches' => null,
            'vibration' => null,
            'brand_id' => 9,
            'tension_id' => null,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'model' => 'Type 2 Hydraulic Handbrake',
            'description' => 'The DSD Type 2 Hydraulic Handbrake has been super popular over the years and in faithful service in hundreds of sim racing environments. It\'s a compact and solid package designed and built to last many lifetimes.',
            'handle_length_inches' => 13,
            'vibration' => null,
            'brand_id' => 9,
            'tension_id' => null,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'model' => 'ClubSport Handbrake V1.5',
            'description' => 'One of the few professional handbrake axis add-ons on the market. Compatible with Fenatec wheels on console, and everything else on PC.',
            'handle_length_inches' => null,
            'vibration' => 0,
            'brand_id' => 3,
            'tension_id' => null,
            'mount_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'model' => 'RallyPro Vertical Hydraulic Hand Brake',
            'description' => 'Built on real hydraulic hand brake. All metal construction. Real master cylinder on brake. 13" or 25" handle length.',
            'handle_length_inches' => 25,
            'vibration' => 0,
            'brand_id' => 12,
            'tension_id' => 4,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'model' => 'TH8A',
            'description' => 'Use as a h-gate shifter, sequential shifter or hand brake. Construction includes metal internal mechanism, gear stick and clamping system.',
            'handle_length_inches' => 5.1,
            'vibration' => null,
            'brand_id' => 1,
            'tension_id' => 1,
            'mount_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'model' => 'TSS HANDBRAKE Sparco Mod',
            'description' => 'Use as a sequential shifter or hand brake. 90% metal (steel and aluminum) construction. It features high-quality components, such as technical bushings made in Germany and industrial-class flat coil springs with 8.8 lbs/4 kg resistance.',
            'handle_length_inches' => null,
            'vibration' => null,
            'brand_id' => 1,
            'tension_id' => 1,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        )
      );
      DB::table('brakes')->insert($brakes);
    }
}
