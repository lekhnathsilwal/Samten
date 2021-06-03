<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TotalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('totals')->insert([
            [
                'type'=>'users',
                'title'=>'Total Students',
                'total'=>500,
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'type'=>'calendar',
                'title'=>'Years Of Experience',
                'total'=>9,
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'type'=>'laptop',
                'title'=>'Our Programs',
                'total'=>20,
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'type'=>'trophy',
                'title'=>'Awards',
                'total'=>200,
                'created_at'=>\Carbon\Carbon::now()
            ]
        ]);
    }
}
