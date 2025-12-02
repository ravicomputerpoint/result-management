<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::insert(
            [
                [
                    'grade_id' => 1,
                    'roll_no' => 1,
                    'admission_no' => 'R001',
                    'name' => 'Ram',
                    'father' => 'Shyam',
                    'mother' => 'Sunita',
                    'dob' => '2003-12-01',
                    'address' => 'Madhuban'
                ],
                [
                    'grade_id' => 2,
                    'roll_no' => 1,
                    'admission_no' => 'R002',
                    'name' => 'Mukesh',
                    'father' => 'Suresh',
                    'mother' => 'Rita',
                    'dob' => '2002-12-01',
                    'address' => 'Mau'
                ],
            ]
        );
    }
}
