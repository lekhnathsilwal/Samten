<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'image'=>'banner1_1589095183.jpg',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'image'=>'banner3_1589095227.jpg',
                'created_at'=>\Carbon\Carbon::now()
            ]
        ]);
    }
}
