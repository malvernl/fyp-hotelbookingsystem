<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'roomname' => 'Sea View',
                'roomtype'=> 1,
                'roomdescript' => 'Sea View Room',
                'price' => 100,
            ],
            [
                'roomname' => 'Mountain View',
                'roomtype' => 2,
                'roomdescript' => 'Mountain View Room',
                'price' => 200,
            ],
            [
                'roomname' => 'King View',
                'roomtype' => 3,
                'roomdescript' => 'King View Room',
                'price' => 300,
            ],
            [
                'roomname' => 'Deluxe View',
                'roomtype' => 4,
                'roomdescript' => 'Deluxe View Room',
                'price' => 500,
            ],
        ]);
    }
}
