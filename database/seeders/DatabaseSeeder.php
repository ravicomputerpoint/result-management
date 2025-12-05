<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Grade;
use Illuminate\Database\Seeder;
use Database\Seeders\ThirdSeeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Ram',
            'email' => 'ram@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        $now = now();

        Grade::insert([
            ['name' => 'Nursery', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'LKG', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'UKG', 'created_at' => $now, 'updated_at' => $now],
            ['name' => '1', 'created_at' => $now, 'updated_at' => $now],
            ['name' => '2', 'created_at' => $now, 'updated_at' => $now],
            ['name' => '3', 'created_at' => $now, 'updated_at' => $now],
            ['name' => '4', 'created_at' => $now, 'updated_at' => $now],
            ['name' => '5', 'created_at' => $now, 'updated_at' => $now],
            ['name' => '6', 'created_at' => $now, 'updated_at' => $now],
            ['name' => '7', 'created_at' => $now, 'updated_at' => $now],
            ['name' => '8', 'created_at' => $now, 'updated_at' => $now],
        ]);

        $this->call(StudentSeeder::class);

        $this->call(ThirdSeeder::class);

        $this->call(HalfSeeder::class);

    }
}
