<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoomdetailsSeeder extends Seeder
{
    public function run()
    {
        DB::table('roomsdetails')->insert([
            [
                'id' => '11',
                'roomtypeid' => 1,
                'active' => 0,
            ],
            [
                'id' => '12',
                'roomtypeid' => 1,
                'active' => 0,
            ],
            [
                'id' => '13',
                'roomtypeid' => 1,
                'active' => 0,
            ],
            [
                'id' => '21',
                'roomtypeid' => 2,
                'active' => 0,
            ],
            [
                'id' => '22',
                'roomtypeid' => 2,
                'active' => 0,
            ],
            [
                'id' => '23',
                'roomtypeid' => 2,
                'active' => 0,
            ],
            [
                'id' => '31',
                'roomtypeid' => 3,
                'active' => 0,
            ],
            [
                'id' => '32',
                'roomtypeid' => 3,
                'active' => 0,
            ],
            [
                'id' => '41',
                'roomtypeid' => 4,
                'active' => 0,
            ],
            [
                'id' => '42',
                'roomtypeid' => 4,
                'active' => 0,
            ],
        ]);
    }
}
