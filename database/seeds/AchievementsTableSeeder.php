<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AchievementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('achievements')->insert([
            [
                'title'=>'Drawing Classes',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla felis ipsum',
                'image'=>'blog01_1589098085.jpg',
                'password'=>bcrypt('secret'),
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'title'=>'Drawing Classes',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla felis ipsum',
                'image'=>'blog02_1589098452.jpg',
                'password'=>bcrypt('secret'),
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'title'=>'Drawing Classes',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla felis ipsum',
                'image'=>'blog04_1589098473.jpg',
                'password'=>bcrypt('secret'),
                'created_at'=>\Carbon\Carbon::now()
            ]
        ]);
    }
}
