<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeHavesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('we_haves')->insert([
            [
                'title'=>'Learning Classes',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla felis ipsum.',
                'image'=>'class_03_1589095461.jpg',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'title'=>'Drawing Classes',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla felis ipsum.',
                'image'=>'blog01_1589095567.jpg',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'title'=>'Imagination Classes',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla felis ipsum.',
                'image'=>'class_02_1589095642.jpg',
                'created_at'=>\Carbon\Carbon::now()
            ]
        ]);
    }
}
