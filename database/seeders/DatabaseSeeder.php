<?php

namespace Database\Seeders;

use App\Models\Idea;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Category::factory()->create(['name' => 'Laravel']);
        Category::factory()->create(['name' => 'Livewire']);
        Category::factory()->create(['name' => 'Tailwindcss']);
        Category::factory()->create(['name' => 'AlpineJs']);
    
        Idea::factory(30)->create();
    }
}
