<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Score;
use App\Models\Upgrade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('password'),
        ]);

        Score::create([
            'user_id' => 1,
            'total' => 0,
        ]);

        Upgrade::create([
            'user_id' => 1,
            'loop_enhancer' => 0,
            'stack_overdrive' => 0,
            'bit_splitter' => 0,
            'garbage_collector' => 0,
        ]);

        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@email.com',
            'password' => bcrypt('password'),
        ]);

        Score::create([
            'user_id' => 2,
            'total' => rand(0, 100),
        ]);

        Upgrade::create([
            'user_id' => 2,
            'loop_enhancer' => rand(0, 100),
            'stack_overdrive' => rand(0, 100),
            'bit_splitter' => rand(0, 100),
            'garbage_collector' => rand(0, 100),
        ]);
    }
}
