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
        DB::table('users')->insert([
            'name' => 'Karan',
            'email' => 'aacharya63.karan@gmail.com',
            'password' => bcrypt('JHI2449D'),
        ]);
        DB::table('users')->insert([
            'name' => 'Shivam',
            'email' => 'shivam@vss.com',
            'password' => bcrypt('password'),
        ]);
    }
}
