<?php

namespace Database\Seeders;

use App\Models\Applicant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'admin@example.com',
            'role' => 'admin'
        ]);

        $user = User::factory()->create([
            'email' => 'student@example.com'
        ]);

        Applicant::factory()->create([
            'user_id' => $user->id
        ]);
    }
}
