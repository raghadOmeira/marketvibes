<?php
namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\tbl_products;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_products')->delete();
        DB::table('tbl_products')->insert(array(
            'id' => '1',
            'category_id' => '1',
            'tag_id' => '2',
            'product_name' => 'Water',
            'product_size' => '1ml',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '5.00',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '2',
            'category_id' => '1',
            'tag_id' => '1',
            'product_name' => 'Ice Tea',
            'product_size' => '750.Ml',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '10.00',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '3',
            'category_id' => '1',
            'tag_id' => '3',
            'product_name' => 'Cola',
            'product_size' => '2L',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '20.00',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '4',
            'category_id' => '2',
            'tag_id' => '28',
            'product_name' => 'apple',
            'product_size' => '1Kg',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '12.00',
            'product_image' => 'image.png',
            'product_color' => 'Green - Red',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '5',
            'category_id' => '2',
            'tag_id' => '28',
            'product_name' => 'Orange',
            'product_size' => '1Kg',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '12.00',
            'product_image' => 'image.png',
            'product_color' => 'Orange',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '6',
            'category_id' => '2',
            'tag_id' => '28',
            'product_name' => 'Tomatoes',
            'product_size' => '1Kg',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '15.00',
            'product_image' => 'image.png',
            'product_color' => 'Red',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '7',
            'category_id' => '3',
            'tag_id' => '28',
            'product_name' => 'Bread',
            'product_size' => '400GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '4.50',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '8',
            'category_id' => '3',
            'tag_id' => '29',
            'product_name' => 'Croissant',
            'product_size' => '200GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '5.50',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '9',
            'category_id' => '3',
            'tag_id' => '4',
            'product_name' => 'Borek',
            'product_size' => '100GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '5.00',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '10',
            'category_id' => '4',
            'tag_id' => '5',
            'product_name' => 'Pasta',
            'product_size' => '500GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '25.00',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '11',
            'category_id' => '4',
            'tag_id' => '5',
            'product_name' => 'Sauce',
            'product_size' => '300GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '19.00',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '12',
            'category_id' => '4',
            'tag_id' => '6',
            'product_name' => 'Flour',
            'product_size' => '2KG',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '40.00',
            'product_image' => 'image.png',
            'product_color' => 'Whait',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '13',
            'category_id' => '5',
            'tag_id' => '7',
            'product_name' => 'Chips',
            'product_size' => '100GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '8.00',
            'product_image' => 'image.png',
            'product_color' => 'Yello',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '14',
            'category_id' => '5',
            'tag_id' => '8',
            'product_name' => 'Chocolate',
            'product_size' => '100GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '15.00',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '15',
            'category_id' => '9',
            'tag_id' => '21',
            'product_name' => 'Max White',
            'product_size' => '400GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '3.00',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '16',
            'category_id' => '9',
            'tag_id' => '22',
            'product_name' => 'Shampoo',
            'product_size' => '400GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '59.99',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '17',
            'category_id' => '9',
            'tag_id' => '23',
            'product_name' => 'Soap',
            'product_size' => '400GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '11.99',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '18',
            'category_id' => '12',
            'tag_id' => '24',
            'product_name' => 'Cream Anmonia',
            'product_size' => '400GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '18.99',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '19',
            'category_id' => '12',
            'tag_id' => '24',
            'product_name' => 'Floor Expert',
            'product_size' => '400GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '45.99',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '20',
            'category_id' => '12',
            'tag_id' => '25',
            'product_name' => 'Gloves',
            'product_size' => '400GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '25.99',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '21',
            'category_id' => '11',
            'tag_id' => '26',
            'product_name' => 'Type-C',
            'product_size' => 'Null',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '25.99',
            'product_image' => 'image.png',
            'product_color' => 'Black - Pink - Whait',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '22',
            'category_id' => '11',
            'tag_id' => '26',
            'product_name' => 'Usb',
            'product_size' => 'Null',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '25.99',
            'product_image' => 'image.png',
            'product_color' => 'Black - Pink - Whait',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '23',
            'category_id' => '11',
            'tag_id' => '31',
            'product_name' => 'Mouse',
            'product_size' => 'Null',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '124.99',
            'product_image' => 'image.png',
            'product_color' => 'Black - Pink - Whait - Red - Blue',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '24',
            'category_id' => '10',
            'tag_id' => '27',
            'product_name' => 'Baby',
            'product_size' => '4',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '89.99',
            'product_image' => 'image.png',
            'product_color' => 'Black - Pink - Whait - Red - Blue',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '25',
            'category_id' => '10',
            'tag_id' => '27',
            'product_name' => 'Baby',
            'product_size' => '5',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '89.99',
            'product_image' => 'image.png',
            'product_color' => 'Black - Pink - Whait - Red - Blue',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '26',
            'category_id' => '6',
            'tag_id' => '10',
            'product_name' => 'Mag - Classic',
            'product_size' => '3',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '14.99',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '27',
            'category_id' => '6',
            'tag_id' => '11',
            'product_name' => 'Cone',
            'product_size' => '3',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '14.99',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '28',
            'category_id' => '6',
            'tag_id' => '12',
            'product_name' => 'Milka - Cup',
            'product_size' => '3',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '14.99',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '29',
            'category_id' => '7',
            'tag_id' => '13',
            'product_name' => 'Milk-Full-Fat',
            'product_size' => '1.5ML',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '14.99',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '30',
            'category_id' => '7',
            'tag_id' => '14',
            'product_name' => 'Cliess',
            'product_size' => '1.5ML',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '14.99',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
       DB::table('tbl_products')->insert(array(
            'id' => '31',
            'category_id' => '7',
            'tag_id' => '15',
            'product_name' => 'Yogurt',
            'product_size' => '3KG',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '14.99',
            'product_image' => 'image.png',
            'product_color' => 'Null',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '32',
            'category_id' => '8',
            'tag_id' => '16',
            'product_name' => 'Eggs - Organic',
            'product_size' => 'Null',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '14.99',
            'product_image' => 'image.png',
            'product_color' => 'White',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '33',
            'category_id' => '8',
            'tag_id' => '17',
            'product_name' => 'Coru Flex',
            'product_size' => 'Null',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '14.99',
            'product_image' => 'image.png',
            'product_color' => 'White',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '34',
            'category_id' => '8',
            'tag_id' => '18',
            'product_name' => 'Chocolate',
            'product_size' => '150GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '14.99',
            'product_image' => 'image.png',
            'product_color' => 'White',
            'publication_status' => '1',
        ));
        DB::table('tbl_products')->insert(array(
            'id' => '35',
            'category_id' => '9',
            'tag_id' => '18',
            'product_name' => 'Chocolate',
            'product_size' => '150GR',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since t he 1990",
            'product_price' => '14.99',
            'product_image' => 'image.png',
            'product_color' => 'White',
            'publication_status' => '1',
        ));
        
    }
}