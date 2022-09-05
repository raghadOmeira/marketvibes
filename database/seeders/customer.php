<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\tbl_customer;

class customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_customer')->delete();
        DB::table('tbl_customer')->insert(array(
            'customer_id' => '1',
            'customer_name' => 'Noureddin',
            'customer_email' => 'noureddin@gmail.com',
            'password' => 'noureddin1212',
            'mobile_number' => '+905331929185',
        ));
    }
}
