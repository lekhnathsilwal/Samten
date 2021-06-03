<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            [
                'image'=>'blog04_1588909474.jpg',
                'description'=>'Science Class',
                'created_at'=>\Carbon\Carbon::now()
            ]
        ]);
    }
}
