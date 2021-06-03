<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            [
                'image'=>'logo_1589027218.png',
                'type'=>'Logo',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'image'=>'home',
                'title'=>'Active Learning',
                'type'=>'icon',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'image'=>'university',
                'title'=>'Books & Library',
                'type'=>'icon',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'image'=>'building',
                'title'=>'Learning & Fun',
                'type'=>'icon',
                'created_at'=>\Carbon\Carbon::now()
            ]
        ]);
    }
}
