<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            AchievementsTableSeeder::class,
            BodsTableSeeder::class,
            GalleriesTableSeeder::class,
            IconsTableSeeder::class,
            InfosTableSeeder::class,
            MessagesTableSeeder::class,
            SlidersTableSeeder::class,
            TotalsTableSeeder::class,
            VideosTableSeeder::class,
            WeHavesTableSeeder::class
        ]);
    }
}
