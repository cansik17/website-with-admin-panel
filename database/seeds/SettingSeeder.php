<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'title'=>'Fit and Furius',
            'phone'=>'212 345 6789',
            'email'=>'info@fitandfurius.com',
            'address'=>'Iris Watson, Box 283 8562, NY',
            'created_at'=>now(),
            'updated_at'=>now(),
          ]);
    }
}
