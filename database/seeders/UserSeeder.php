<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Hanny',
            'email' => 'hanny12@gmail.com',
            'password' => bcrypt('hanhan12'),
            'gender' => 'Female',
            'dob' => '2002-08-12',
            'country' => 'Indonesia',
            'isAdmin' => true,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s'),
        ]);
    }
}
