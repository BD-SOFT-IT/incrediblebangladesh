<?php

use Illuminate\Database\Seeder;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('travel_packages')->insert([
            'package_title'                 =>  'Exploring Bangladesh',
            'package_sub_title'             =>  'Bangladesh is south Asia\'s greenest jewel - that contains',
            'package_best_time'             =>  'January - April',
            'package_duration'              =>  '21 Days/ 22 Nights ',
            'package_price'                 =>  '50000',
            'package_description'           =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
        ]);
        DB::table('travel_packages')->insert([
            'package_title'                 =>  'Exploring Coxsbazar',
            'package_sub_title'             =>  'Bangladesh is south Asia\'s greenest jewel - that contains',
            'package_best_time'             =>  'January - April',
            'package_duration'              =>  '21 Days/ 22 Nights ',
            'package_price'                 =>  '50000',
            'package_description'           =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
        ]);
        DB::table('travel_packages')->insert([
            'package_title'                 =>  'Exploring Khulna',
            'package_sub_title'             =>  'Bangladesh is south Asia\'s greenest jewel - that contains',
            'package_best_time'             =>  'January - April',
            'package_duration'              =>  '21 Days/ 22 Nights ',
            'package_price'                 =>  '50000',
            'package_description'           =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
        ]);
        DB::table('travel_packages')->insert([
            'package_title'                 =>  'Exploring Chottogram',
            'package_sub_title'             =>  'Bangladesh is south Asia\'s greenest jewel - that contains',
            'package_best_time'             =>  'January - April',
            'package_duration'              =>  '21 Days/ 22 Nights ',
            'package_price'                 =>  '50000',
            'package_description'           =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
        ]);
    }
}
