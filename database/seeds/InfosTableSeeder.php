<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            [
                'name'=>'Samten Memorial Educational Academy',
                'address'=>'Budhanilkantha-11, kapantar, Kathmandu',
                'contact'=>'+977-01-4820214/9851228277',
                'email'=>'info@samtenschool.edu.np',
                'created_at'=>\Carbon\Carbon::now()
            ]
        ]);
    }
}
