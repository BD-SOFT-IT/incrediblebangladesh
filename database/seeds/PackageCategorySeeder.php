<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PackageCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('package_categories')->insert([
            'category_title'    => 'Awesome Holiday',
            'category_tag'    => 'Awesome Holiday',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);

        DB::table('package_categories')->insert([
            'category_title'    => 'Feature Holiday',
            'category_tag'    => 'Feature Holiday',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);

        DB::table('package_categories')->insert([
            'category_title'    => 'Daily Tour',
            'category_tag'    => 'Daily Tour',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);

        DB::table('package_categories')->insert([
            'category_title'    => 'Upcoming Holiday',
            'category_tag'    => 'Upcoming Holiday',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
    }
}
