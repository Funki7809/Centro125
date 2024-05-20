<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            ['name' => 'Deportes'],
            ['name' => 'Cultura'],
            ['name' => 'Opinión'],
            ['name' => 'Política'],
            ['name' => 'Salud'],
            ['name' => 'Tecnología'],
            ['name' => 'Espectáculos'],
            ['name' => 'Ambiente'],
            ['name' => 'Galerías Fotográficas'],
            ['name' => 'Gastronomía']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
