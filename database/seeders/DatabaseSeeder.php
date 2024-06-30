<?php

namespace Database\Seeders;

use App\Models\Service;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin@admin.com'),
            'role' => 'admin',
            'status' => '1',
        ]);

        $this->call([
            ContributorSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            ServiceSeeder::class,
            OrderSeeder::class,
        ]);
    }
}