<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin user',
            'email' => 'admin@admin.com',
            'password' => 'admin',
            'role' => 'admin',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Operator User',
            'email' => 'operator@example.com',
            'password' => 'SoyUnOperator123',
            'role' => 'operator',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => 'user',
            'role' => 'user',
        ]);

        $this->call(ProductSeeder::class);
    }
}
