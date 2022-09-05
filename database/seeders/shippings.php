<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\tbl_shippings;
 
class shippings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_shipping')->delete();
        DB::table('tbl_shipping')->insert(array(
            'shipping_id' => '1',
            'shipping_email' => 'noureddin@gmail.com',
            'shipping_first_name' => 'noureddin',
            'shipping_last_name' => 'abou rmih', 
            'shipping_address' => 'Hirka-i Serif Mh. Dirim Sk. No 21/8 fatih / istanbul', 
            'shipping_mobile_number' => '+905331929185',
            'shipping_city' => 'istanbul',
        ));
    }
}
