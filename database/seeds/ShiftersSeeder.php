<?php

use Illuminate\Database\Seeder;

class ShiftersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('shifters')->delete();

      $shifters = array(
        array(
          // 1
            'model' => 'ClubSport Shifter SQ V 1.5',
            'description' => 'Made entirely of metal. Standard mount for automotive knobs.',
            'brand_id' => 3,
            'mount_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          // 2
            'model' => '2015 DSD Pro',
            'description' => 'Hand built, lifetime warranty.',
            'brand_id' => 10,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          // 3
            'model' => 'DSD Short Throw Pro',
            'description' => 'Tight, narrow action. Sturdy construction.',
            'brand_id' => 10,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          // 4
            'model' => 'Sim Shifter Sequential',
            'description' => 'The Heusinkveld Sim Shifter Sequential is a durable and compact sequential shifter system. Using a ball spring resistance system, shifting requires an early peak force after which resistance drops just as in real cars. The shifter comes with various lengths of shifter levers as well as shifter knobs, allowing for maximum adjustability.',
            'brand_id' => 8,
            'mount_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          // 5
            'model' => 'PSL Sequential Shifter V2',
            'description' => 'The Pro-Sim Lite simulator sequential gear shifter V2 has been developed in conjunction with Quaife Engineering. The internals are based on an original real Quaife gearbox design that gives the same in gear ‘thump’ feeling from a real car. The completely solid and robust design weighs a reassuring 2.8kg as it is made from hardened steel providing outstanding durability.',
            'brand_id' => 17,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          // 6
            'model' => 'TSW Speedshifter',
            'description' => 'This is our 6-speed gated speedshifter, and it\'s the most solidly built and positive-feeling shifter on the sim-racing market. You may question whether the off-set shift pattern is the way to go, but we\'re huge believers in this design being the best for competitive racing. A standard H-pattern may be more in keeping with the real cars you\'ve driven, but this off-set design makes transitions through the gears effortless and lightning fast, and once you become accustomed to it, you will likely never miss the gear you are aiming for.',
            'brand_id' => 14,
            'mount_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          // 7
            'model' => 'SQ Shifter',
            'description' => 'https://www.youtube.com/watch?v=2RtHZcsM3P4',
            'brand_id' => 12,
            'mount_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          // 8
            'model' => 'Shifter',
            'description' => 'SHH is a USB plug & play shifter, developed for simulator fans to enjoy the pleasure of driving.',
            'brand_id' => 10,
            'mount_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          // 9
            'model' => 'TH8A',
            'description' => 'Realistic, high-end gearbox. Multi-platform: PC / PS3 / PS4 / Xbox One',
            'brand_id' => 1,
            'mount_id' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          // 10
            'model' => 'TSS Handbrake Sparco Mod',
            'description' => 'Hands on Sparco & rally world thanks to Thrustmaster TSS HANDBRAKE Sparco Mod! Progressive handbrake and sequential shifter by Sparco: master your drifting technique',
            'brand_id' => 1,
            'mount_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
          // 11
            'model' => 'G Driving Force',
            'description' => 'The sim racing shifter for G29 and G920 Driving Force Racing Wheels.',
            'brand_id' => 2,
            'mount_id' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
      );
      DB::table('shifters')->insert($shifters);
    }
}
