<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => "Elektronik",
            'slug' => "elektronik",
            'icon' => "bi bi-laptop",
            'deskripsi' => "Berbagai hal berkaitan dengan elektronik, anda dapat mencari service tersebut melalui klik dibawah ini"
        ]);
        Category::create([
            'name' => "Otomotif",
            'slug' => "otomotif",
            'icon' => 'bi bi-car-front-fill',
            'deskripsi' => "Berbagai hal berkaitan dengan otomotif, anda dapat mencari service tersebut melalui klik dibawah ini"
        ]);
    }
}
