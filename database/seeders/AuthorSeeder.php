<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ['name' => 'Mayte Berenice Hernández Medina'],
            ['name' => 'David Emilio Legorreta Vázquez'],
            ['name' => 'Jesús Alejandro Castañeda López'],
            ['name' => 'Santiago collazo Cabrera'],
            ['name' => 'Ariksy Caroly Villarruel Portillo'],
            ['name' => 'Marcos García Valle']
        ];
        
        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
