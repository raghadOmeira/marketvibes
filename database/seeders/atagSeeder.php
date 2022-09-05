<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tbl_tags;

class atagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_tags')->delete();
        DB::table('tbl_tags')->insert(array(
            'id' => '1',
            'tag_name' => 'Pepsi',
            'tag_description' => 'This Is A Pepsi',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '2',
            'tag_name' => 'Erikli',
            'tag_description' => 'This Is A Erikli',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '3',
            'tag_name' => 'Lipton',
            'tag_description' => 'This Is A Lipton',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '4',
            'tag_name' => 'Super Fresh',
            'tag_description' => 'This Is A Super Fresh',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '5',
            'tag_name' => 'Parilla',
            'tag_description' => 'This Is A Parilla',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '6',
            'tag_name' => 'Dr. Oetker',
            'tag_description' => 'This Is A Dr. Oetker',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '7',
            'tag_name' => "Lay's",
            'tag_description' => "This Is A lay's",
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '8',
            'tag_name' => 'Ulker',
            'tag_description' => 'This Is A Ulker',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '9',
            'tag_name' => 'Haribo',
            'tag_description' => 'This Is A Haribo',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '10',
            'tag_name' => 'Magnum',
            'tag_description' => 'This Is A Magnum',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '11',
            'tag_name' => 'Maras',
            'tag_description' => 'This Is A Haribo',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '12',
            'tag_name' => 'Algida',
            'tag_description' => 'This Is A Algida',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '13',
            'tag_name' => 'Icim',
            'tag_description' => 'This Is A Icim',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '14',
            'tag_name' => 'kiri',
            'tag_description' => 'This Is A Kiri',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '15',
            'tag_name' => 'Sutas',
            'tag_description' => 'This Is A Sutas',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '16',
            'tag_name' => 'Happy Life',
            'tag_description' => 'This Is A Happy Life',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '17',
            'tag_name' => 'Coco Pops',
            'tag_description' => 'This Is A Coco Pops',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '18',
            'tag_name' => 'Nutella',
            'tag_description' => 'This Is A Nutella',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '19',
            'tag_name' => 'Indomie',
            'tag_description' => 'This Is A Indomie',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '20',
            'tag_name' => 'Erpilic',
            'tag_description' => 'This Is A Erpilic',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '21',
            'tag_name' => 'Colgate',
            'tag_description' => 'This Is A Colgate',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '22',
            'tag_name' => 'Gliss',
            'tag_description' => 'This Is A Gliss',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '23',
            'tag_name' => 'Duru',
            'tag_description' => 'This Is A Duru',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '24',
            'tag_name' => 'Cif',
            'tag_description' => 'This Is A Cif',
            'publication_status' => '1',
        ));DB::table('tbl_tags')->insert(array(
            'id' => '25',
            'tag_name' => 'vileda',
            'tag_description' => 'This Is A vileda',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '26',
            'tag_name' => 'T-tec',
            'tag_description' => 'This Is A T-tec',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '27',
            'tag_name' => 'Prima',
            'tag_description' => 'This Is A Prima',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '28',
            'tag_name' => 'Market-Vibes',
            'tag_description' => 'This Is A Market-Vibes',
            'publication_status' => '1',
        ));
        DB::table('tbl_tags')->insert(array(
            'id' => '29',
            'tag_name' => 'Uno',
            'tag_description' => 'This Is A Uno',
            'publication_status' => '1',
        ));
         DB::table('tbl_tags')->insert(array(
            'id' => '30',
            'tag_name' => 'Snacks',
            'tag_description' => 'This Is A Snacks',
            'publication_status' => '1',
        ));
         DB::table('tbl_tags')->insert(array(
            'id' => '31',
            'tag_name' => 'Reyzer',
            'tag_description' => 'This Is A Reyzer',
            'publication_status' => '1',
        ));
        
        }
}
