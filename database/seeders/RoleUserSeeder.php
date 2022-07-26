<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->insert([
            [
                'role_id' => 3,
                'user_id' => 1,
                'user_type' => "App\Models\User",
            ],
            [
                'role_id' => 2,
                'user_id' => 2,
                'user_type' => "App\Models\User",
            ],
            [
                'role_id' => 2,
                'user_id' => 3,
                'user_type' => "App\Models\User",
            ],
            [
                'role_id' => 1,
                'user_id' => 4,
                'user_type' => "App\Models\User",
            ],
        ]);
    }
}
