<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class WhyIncredibleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('why_incredibles')->insert([
            'why_title' => 'Lower Price',
            'why_des'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias aliquid cumque',

            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
        DB::table('why_incredibles')->insert([
            'why_title' => 'Small Price',
            'why_des'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias aliquid cumque',

            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
        DB::table('why_incredibles')->insert([
            'why_title' => 'Most Price',
            'why_des'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias aliquid cumque',

            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
    }
}
