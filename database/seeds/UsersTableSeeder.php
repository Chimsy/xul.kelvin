<?php

use Illuminate\Database\Seeder;
use App\Laravue\Acl;
use App\Laravue\Models\Role;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Golden Chimusinde',
            'email' => 'goldenchimsy@gmail.com',
            'password' => Hash::make('#pass123'),
            "reg_num"=>"R111855J",
            'year' => '4',
            'semester' => '2',
            'program' => 'BMIS',
            'program_fees' => '20000',
            'ecocash' => 35000,
            'zipit' => 50000,
            'created_at'=>'2020-04-20 12:36:22',
            'updated_at'=>'2020-04-20 12:36:22',
        ]);

    }
}
