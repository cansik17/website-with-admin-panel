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
        // $this->call(UsersTableSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(UserSeeder::class);
    }
}
