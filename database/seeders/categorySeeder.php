<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tbl_categories;
class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('tbl_categories')->delete();
            DB::table('tbl_categories')->insert(array(
                'id' => '1',
                'category_name' => 'Drinks',
                'category_description' => 'This Category its For The drinks Like Cola',
                'publication_status' => '1',
            ));
            DB::table('tbl_categories')->insert(array(
                'id' => '2',
                'category_name' => 'Fruits & Vegetables',
                'category_description' => 'This Category its For The Fruits & Vegetables Like banana',
                'publication_status' => '1',
            ));
            DB::table('tbl_categories')->insert(array(
                'id' => '3',
                'category_name' => 'Baked Goods',
                'category_description' => 'This Category its For The baked Goods',
                'publication_status' => '1',
            ));
             DB::table('tbl_categories')->insert(array(
                'id' => '4',
                'category_name' => 'Food',
                'category_description' => 'This Category its For The foods',
                'publication_status' => '1',
            ));
            DB::table('tbl_categories')->insert(array(
                'id' => '5',
                'category_name' => 'snacks',
                'category_description' => 'This Category its For The snacks',
                'publication_status' => '1',
            ));
            DB::table('tbl_categories')->insert(array(
                'id' => '6',
                'category_name' => 'sundae',
                'category_description' => 'This Category its For The sundae',
                'publication_status' => '1',
            ));
            DB::table('tbl_categories')->insert(array(
                'id' => '7',
                'category_name' => 'Milk & Diarg',
                'category_description' => 'This Category its For The Milk & Diarg',
                'publication_status' => '1',
            ));
            DB::table('tbl_categories')->insert(array(
                'id' => '8',
                'category_name' => 'Break Fast',
                'category_description' => 'This Category its For The Break Fast',
                'publication_status' => '1',
            ));
            DB::table('tbl_categories')->insert(array(
                'id' => '9',
                'category_name' => 'Personal Care',
                'category_description' => 'This Category its For The Personal Care',
                'publication_status' => '1',
            ));
            DB::table('tbl_categories')->insert(array(
                'id' => '10',
                'category_name' => 'baby Care',
                'category_description' => 'This Category its For The Baby Care',
                'publication_status' => '1',
            ));
            DB::table('tbl_categories')->insert(array(
                'id' => '11',
                'category_name' => 'Technoloji',
                'category_description' => 'This Category its For The technoloji',
                'publication_status' => '1',
            ));
            DB::table('tbl_categories')->insert(array(
                'id' => '12',
                'category_name' => 'Home Care',
                'category_description' => 'This Category its For The Home Care',
                'publication_status' => '1',
            ));
        }
    }
}
