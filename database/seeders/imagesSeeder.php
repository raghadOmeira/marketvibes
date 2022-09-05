<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\images;

class imagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->delete();
        DB::table('images')->insert(array(
            'id' => '1',
            'image_name' => 'Drinks',
            'image_type' => '2',
            'description' => 'This Category Icon',
            'image_link' => 'images/Categories_icons/drinks.png',
        ));
        DB::table('images')->insert(array(
            'id' => '2',
            'image_name' => 'Fruits & Vegetables',
            'image_type' => '2',
            'description' => 'This Category Icon',
            'image_link' => 'images/Categories_icons/fruits-and-vegetables.png',
        ));
        DB::table('images')->insert(array(
            'id' => '3',
            'image_name' => 'Baked Goods',
            'image_type' => '2',
            'description' => 'This Category Icon',
            'image_link' => 'images/Categories_icons/baked_goods.png',
        ));
        DB::table('images')->insert(array(
            'id' => '4',
            'image_name' => 'Food',
            'image_type' => '2',
            'description' => 'This Category Icon',
            'image_link' => 'images/Categories_icons/food.png',
        ));
        DB::table('images')->insert(array(
            'id' => '5',
            'image_name' => 'snacks',
            'image_type' => '2',
            'description' => 'This Category Icon',
            'image_link' => 'images/Categories_icons/snacks.png',
        ));
        DB::table('images')->insert(array(
            'id' => '6',
            'image_name' => 'Freezings',
            'image_type' => '2',
            'description' => 'This Category Icon',
            'image_link' => 'images/Categories_icons/Freezings.png',
        ));
        DB::table('images')->insert(array(
            'id' => '7',
            'image_name' => 'Milk & Diarg',
            'image_type' => '2',
            'description' => 'This Category Icon',
            'image_link' => 'images/Categories_icons/milk&dairy.png',
        ));
        DB::table('images')->insert(array(
            'id' => '8',
            'image_name' => 'Break Fast',
            'image_type' => '2',
            'description' => 'This Category Icon',
            'image_link' => 'images/Categories_icons/breakfast.png',
        ));
        DB::table('images')->insert(array(
            'id' => '9',
            'image_name' => 'Personal Care',
            'image_type' => '2',
            'description' => 'This Category Icon',
            'image_link' => 'images/Categories_icons/personal_care.png',
        ));
        DB::table('images')->insert(array(
            'id' => '10',
            'image_name' => 'baby Care',
            'image_type' => '2',
            'description' => 'This Category Icon',
            'image_link' => 'images/Categories_icons/baby_care.png',
        ));
        DB::table('images')->insert(array(
            'id' => '11',
            'image_name' => 'Technoloji',
            'image_type' => '2',
            'description' => 'This Category Icon',
            'image_link' => 'images/Categories_icons/Technoloji.png',
        ));
        
    }
}
