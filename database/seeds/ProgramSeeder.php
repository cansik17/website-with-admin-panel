<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            'order'=>1,
            'title'=>'CROSSFIT LEVEL 1',
            'text'=>'Sufferers around the globe will be happy to hear that there are sleep apnea remedies.',
            'image'=>'front/img/classes/class-1.jpg',
        ]); 
           DB::table('programs')->insert([
            'order'=>2,
            'title'=>'BOOTCAMP',
            'text'=>'The oil, also called linseed oil, has many industrial uses – it is an important ingredient',
            'image'=>'front/img/classes/class-2.jpg',
        ]);
        DB::table('programs')->insert([
            'order'=>3,
            'title'=>'ENERGY BLAST',
            'text'=>'It is a very common occurrence like cold or fever depending upon your lifestyle.',
            'image'=>'front/img/classes/class-3.jpg',
        ]);
        DB::table('programs')->insert([
            'order'=>4,
            'title'=>'CLASSIC BODY BALANCE',
            'text'=>'The procedure is usually a preferred alternative to photorefractive keratectomy,',
            'image'=>'front/img/classes/class-4.jpg',
        ]);

    }
}
