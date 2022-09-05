<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\tbl_payment;

class payments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_payment')->delete();
        DB::table('tbl_payment')->insert(array(
            'payment_id' => '1',
            'payment_method' => 'cash',
            'payment_status' => '1',
        ));
    }
}
