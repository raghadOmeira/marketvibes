<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\tbl_order_details;

class order_details extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_order_details')->delete();
        DB::table('tbl_order_details')->insert(array(
            'order_details_id' => '1',
            'order_id' => '1',
            'product_id' => '1',
            'product_name' => 'Full Sleeve Shirt',
            'product_price' => '100',
            'product_sales_quantity' => '10',
            'sub_total' => '1000',
        ));
    }
}
