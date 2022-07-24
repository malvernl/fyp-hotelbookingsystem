<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'john',
                'email' => 'john@gmail.com',
                'password' => bcrypt('password'),
                'gender' => 'Others',
            ],
            [
                'name' => 'Staff001',
                'email' => 'staff1@mail.com',
                'password' => bcrypt('staff001'),
                'gender' => 'Others',
            ],
            [
                'name' => 'Staff003',
                'email' => 'staff2@mail.com',
                'password' => bcrypt('staff003'),
                'gender' => 'Others',
            ],
            [
                'name' => 'superadmin',
                'email' => 'super@admin.com',
                'password' => bcrypt('admin'),
                'gender' => 'Others',
            ],
        ]);
    }
}
