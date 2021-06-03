<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bods')->insert([
            [
                'name'=>'Stella Roffin',
                'position'=>'Board Member',
                'image'=>'bod_1589097746.jpg',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'name'=>'Stella Roffin',
                'position'=>'Board Member',
                'image'=>'bod1_1589097814.jpg',
                'created_at'=>\Carbon\Carbon::now()
            ],[
                'name'=>'Stella Roffin',
                'position'=>'Board Member',
                'image'=>'bod2_1589097861.jpg',
                'created_at'=>\Carbon\Carbon::now()
            ]
        ]);
    }
}
