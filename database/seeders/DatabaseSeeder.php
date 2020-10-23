<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('attendances')->insert([
            'date' => 1,
            'work_from' => '10:00',
            'work_to' => '19:00',
            'break_from' => '12:00',
            'break_to' => '13:00',
            'description' => '製造、単体テスト',
        ]);
        DB::table('attendances')->insert([
            'date' => 2,
            'work_from' => '10:00',
            'work_to' => '19:00',
            'break_from' => '12:00',
            'break_to' => '13:00',
            'description' => '製造、単体テスト',
        ]);
        DB::table('attendances')->insert([
            'date' => 3,
            'work_from' => '10:00',
            'work_to' => '19:00',
            'break_from' => '12:00',
            'break_to' => '13:00',
            'description' => '製造、単体テスト',
        ]);
    }
}
