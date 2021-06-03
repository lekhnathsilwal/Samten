<?php

use Illuminate\Database\Seeder;
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
            [
                'f_name'=>'Super',
                'l_name'=>'Admin',
                'email'=>'super@admin.com',
                'pp'=>'nopp.jpg',
                'status'=>1,
                'type'=>0,
                'password'=>bcrypt('secret'),
                'created_at'=>\Carbon\Carbon::now()
            ]
        ]);
    }
}
