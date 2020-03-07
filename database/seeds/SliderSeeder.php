<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'order'=>1,
            'firstTitle'=>'JOİN US NOW',
            'secondTitle'=>'FITNESS & SPORT',
            'image'=>'front/img/hero-slider/hero-1.jpg',
        ]);
        DB::table('sliders')->insert([
            'order'=>2,
            'firstTitle'=>'JOİN US NOW',
            'secondTitle'=>'FITNESS & SPORT',
            'image'=>'front/img/hero-slider/hero-2.jpg',
        ]);
        DB::table('sliders')->insert([
            'order'=>3,
            'firstTitle'=>'JOİN US NOW',
            'secondTitle'=>'FITNESS & SPORT',
            'image'=>'front/img/hero-slider/hero-3.jpg',
        ]);
    }
}
