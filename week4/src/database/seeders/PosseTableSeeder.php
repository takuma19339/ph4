<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // プライバシー保護のため、あだ名を使用しています
        DB::table('posses')->insert([
            [
                'name' => '坂本龍馬',
                'generation' => 3.5,
                'intern' => 'jober',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '大久保利通',
                'generation' => 3.0,
                'intern' => 'jober',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '西郷隆盛',
                'generation' => 3.0,
                'intern' => 'commune',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '勝海舟',
                'generation' => 3.5,
                'intern' => 'commune',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '高杉晋作',
                'generation' => 3.0,
                'intern' => 'eaglys',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '伊藤博文',
                'generation' => 3.0,
                'intern' => 'eaglys',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '大隈重信',
                'generation' => 3.0,
                'intern' => 'jober',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '木戸孝允',
                'generation' => 3.0,
                'intern' => 'jober',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '徳川慶喜',
                'generation' => 3.0,
                'intern' => 'commune',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '岩倉具視',
                'generation' => 2.0,
                'intern' => 'commune',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '榎本武揚',
                'generation' => 2.0,
                'intern' => 'commune',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '井上馨',
                'generation' => 3.0,
                'intern' => 'eaglys',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
