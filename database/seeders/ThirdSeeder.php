<?php

namespace Database\Seeders;

use App\Models\Third;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ThirdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Third::insert([
            [
                'grade_id' => 1,
                'student_id' => 1,
                'hindi' => 32,
                'english' => 48,
                'math' => 34,
                'drawing' => 34,
                'rhymes' => 33
            ],
            [
                'grade_id' => 2,
                'student_id' => 1,
                'hindi' => 22,
                'english' => 43,
                'math' => 32,
                'drawing' => 44,
                'rhymes' => 13
            ]
        ]);
    }
}
