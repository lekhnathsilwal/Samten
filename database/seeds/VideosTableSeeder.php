<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            [
                'name'=>'KMLuuFl6quA',
                'type'=>'link',
                'created_at'=>\Carbon\Carbon::now()
            ]
        ]);
    }
}
