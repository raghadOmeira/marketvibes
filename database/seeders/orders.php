<?php
namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\tbl_order;

class orders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_order')->delete();
        DB::table('tbl_order')->insert(array(
            'order_id' => '1',
            'customer_id' => '1',
            'payment_id' => '1',
            'shipping_id' => '1',
            'order_total' => '1111',
            'note' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry . Lorem Ipsum has been the industry's standard dummy text ever since the 1990",
            'order_status' => '1',
            'cart_confirmation' => '1',

        ));
    }
}
