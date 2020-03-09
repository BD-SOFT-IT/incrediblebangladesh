<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'admin@alpha.com',
                'is_admin'=>'1',
                'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'User',
                'email'=>'user@gmail.com',
                'is_admin'=>'0',
                'password'=> bcrypt('12345678'),
            ],
        ];

        foreach ($user as $key => $value) {

            \App\Models\User::create($value);

        }
    }
}
