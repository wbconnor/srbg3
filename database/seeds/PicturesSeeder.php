<?php

use Illuminate\Database\Seeder;

class PicturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pictures')->delete();

      $pictures = array(
        array(
            'url' => 'https://www.fanatec.com/image/cache/data/wheels/CSW-V2-5/CSW-V2-5-Big1-1000x666.png',
            'cover' => 1,
            'wheel_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://www.fanatec.com/image/cache/data/wheels/CSL-E-RW-PS4/CSL-E-RW-PS4-Main01-1000x666.png',
            'cover' => 1,
            'wheel_id' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://www.fanatec.com/image/cache/data/WheelBases/CSL-E-WB/CSL-E-WB-G00-1000x666.png',
            'cover' => 1,
            'wheel_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/26-280-096-V01.jpg',
            'cover' => 1,
            'wheel_id' => 4,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://www.bhphotovideo.com/images/images2000x2000/thrustmaster_4469024_ts_xw_racing_wheel_1360284.jpg',
            'cover' => 1,
            'wheel_id' => 5,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://images-na.ssl-images-amazon.com/images/I/81AuOFeEV4L._SL1500_.jpg',
            'cover' => 1,
            'wheel_id' => 6,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://m.media-amazon.com/images/S/aplus-media/vc/e7dd00c5-45b1-4586-bdbc-be8259047068.jpg',
            'cover' => 1,
            'wheel_id' => 7,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://images-na.ssl-images-amazon.com/images/I/91Z-R8Ii5dL._AC_.jpg',
            'cover' => 1,
            'wheel_id' => 8,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://www.bhphotovideo.com/images/images1500x1500/thrustmaster_4169088_t300_rs_gt_edition_1304016.jpg',
            'cover' => 1,
            'wheel_id' => 9,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://m.media-amazon.com/images/S/aplus-media/mg/e6c3e473-c906-4ded-ad98-4855a3c5bf3b.jpg',
            'cover' => 1,
            'wheel_id' => 10,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://images-na.ssl-images-amazon.com/images/I/71DjGu-5RrL.jpg',
            'cover' => 1,
            'wheel_id' => 11,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://images-na.ssl-images-amazon.com/images/I/81xiAAt29lL._AC_.jpg',
            'cover' => 1,
            'wheel_id' => 12,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://www.bhphotovideo.com/images/images2500x2500/logitech_941_000121_g920_driving_force_racing_1374570.jpg',
            'cover' => 1,
            'wheel_id' => 13,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://images-na.ssl-images-amazon.com/images/I/81tf8wnbI-L._AC_.jpg',
            'cover' => 1,
            'wheel_id' => 14,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://images-na.ssl-images-amazon.com/images/I/81tf8wnbI-L._AC_.jpg',
            'cover' => 1,
            'wheel_id' => 15,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://m.media-amazon.com/images/S/aplus-media/sota/cd2253fd-035d-4cf0-8751-ac53b6278839.jpg',
            'cover' => 1,
            'wheel_id' => 16,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://i.redd.it/34d4c06uhrsz.jpg',
            'cover' => 1,
            'wheel_id' => 17,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://www.shopmyexchange.com/products/images/xlarge/1278569_0000.jpg',
            'cover' => 1,
            'wheel_id' => 18,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://simxperience.com/Portals/0/EasyGalleryImages/1/73/IMG_0147.JPG',
            'cover' => 1,
            'wheel_id' => 19,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'http://www.leobodnar.com/shop/index.php?main_page=popup_image&pID=253',
            'cover' => 1,
            'wheel_id' => 20,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://www.simracingbay.com/product/simucube-based-osw-kit-sincos-with-cm110-case/#&gid=1&pid=1',
            'cover' => 1,
            'wheel_id' => 21,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://cdn.shopify.com/s/files/1/1044/3202/products/SW12C_Motor_1024x1024.jpg?v=1522683295',
            'cover' => 1,
            'wheel_id' => 22,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://cdn3.volusion.com/nzfzp.aykwu/v/vspfiles/photos/RMT-DDAF-BASE-2.jpg?1496478963',
            'cover' => 1,
            'wheel_id' => 23,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://www.bhphotovideo.com/images/images2500x2500/thrustmaster_4469022_tmx_force_feedback_racing_1245131.jpg',
            'cover' => 1,
            'wheel_id' => 24,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://img.artencraft.be/i/2676621.png?_ga=2.135752375.742426916.1541626132-1104548239.1541626132',
            'cover' => 1,
            'wheel_id' => 25,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://m.media-amazon.com/images/S/aplus-media/vc/1b57c201-a1cf-429a-b0fb-0de91b08e506.jpg',
            'cover' => 1,
            'wheel_id' => 26,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'url' => 'https://www.bhphotovideo.com/images/images1500x1500/thrustmaster_4169084_t150_pro_force_feedback_1360094.jpg',
            'cover' => 1,
            'wheel_id' => 27,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
      );
      DB::table('pictures')->insert($pictures);
    }
}
