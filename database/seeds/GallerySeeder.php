<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
           
            'image'=>'front/img/gallery/gallery-1.jpg'
        ]);
        DB::table('galleries')->insert([
           
            'image'=>'front/img/gallery/gallery-2.jpg'
        ]);
        DB::table('galleries')->insert([
           
            'image'=>'front/img/gallery/gallery-3.jpg'
        ]);
        DB::table('galleries')->insert([
           
            'image'=>'front/img/gallery/gallery-4.jpg'
        ]);
        DB::table('galleries')->insert([
           
            'image'=>'front/img/gallery/gallery-5.jpg'
        ]);
        DB::table('galleries')->insert([
           
            'image'=>'front/img/gallery/gallery-6.jpg'
        ]);
        DB::table('galleries')->insert([
           
            'image'=>'front/img/gallery/gallery-7.jpg'
        ]);
        DB::table('galleries')->insert([
           
            'image'=>'front/img/gallery/gallery-8.jpg'
        ]);
        DB::table('galleries')->insert([
           
            'image'=>'front/img/gallery/gallery-9.jpg'
        ]);
    }
}
