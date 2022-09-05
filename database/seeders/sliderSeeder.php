<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\slider;

class sliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_slider')->delete();
        DB::table('tbl_slider')->insert(array(
            'slider_id' => '1',
            'slider_image' => 'image.jpg',
            'publication_status' => 'Nothing',
        ));
    }
}
