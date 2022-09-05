<?php


namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\tbl_admin;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_admin')->delete();
        DB::table('tbl_admin')->insert(array(
            'admin_id' => '1',
            'admin_email' => 'ahmad@gmail.com',
            'admin_password' => 'ahmad1212',
            'admin_name' => 'ahmad Hamada',
            'admin_phone' => '+905332589476',
        ));
    }
}
