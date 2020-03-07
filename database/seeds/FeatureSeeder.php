<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            'order'=>1,
            'title'=>'GROUP CLASSES',
            'text'=>'The Sopranos manages to address the biases
            and benefits of therapy',
            'image'=>'front/img/feature/feature-1.jpg',
        ]);
        DB::table('features')->insert([
            'order'=>2,
            'title'=>'PERSONAL TRAINING',
            'text'=>'Strep throat is very common during the flu
            seasons and it can be preceded',
            'image'=>'front/img/feature/feature-2.jpg',
        ]);
        DB::table('features')->insert([
            'order'=>3,
            'title'=>'SPORTS NUTRITION',
            'text'=>'A Human Being’s right to life implies his right to
            have the free and unrestricted',
            'image'=>'front/img/feature/feature-3.jpg',
        ]);
        
    }
}
