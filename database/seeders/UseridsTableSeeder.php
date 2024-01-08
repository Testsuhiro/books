<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UseridsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //テスト用データ
        DB::table('userids')->insert([
            'user_id' => 'okawa',
            'pass' => 'jel9102',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
