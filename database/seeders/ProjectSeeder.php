<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models

use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();
        for ($i=0; $i < 10; $i++) { 
            Project::create([
                'title' => fake()->company(),
                'description' => fake()->sentence(5),
                'image' => fake()->word(),
                'category' => fake()->word(2, true)

            ]);
        }
    }
}
