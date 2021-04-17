<?php

namespace Database\Seeders;

use App\Models\Idea;
use App\Models\Status;
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
    
        Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);
        Status::factory()->create(['name' => 'Considering', 'classes' => 'bg-purple text-white']);
        Status::factory()->create(['name' => 'In Progress', 'classes' => 'bg-yellow text-white']);
        Status::factory()->create(['name' => 'Implemented', 'classes' => 'bg-green text-white']);
        Status::factory()->create(['name' => 'Closed', 'classes' => 'bg-red text-white']);
        
        Idea::factory(30)->create();
    }
}
