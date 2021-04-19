<?php

namespace Database\Seeders;

use App\Models\Idea;
use App\Models\User;
use App\Models\Vote;
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
        User::factory()->create(['name' => 'Himaloy', 'email' => 'sarwarahmed6@gmail.com']);
        User::factory()->count(19)->create();

        Category::factory()->create(['name' => 'Laravel']);
        Category::factory()->create(['name' => 'Livewire']);
        Category::factory()->create(['name' => 'Tailwindcss']);
        Category::factory()->create(['name' => 'AlpineJs']);
    
        Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);
        Status::factory()->create(['name' => 'Considering', 'classes' => 'bg-purple text-white']);
        Status::factory()->create(['name' => 'In Progress', 'classes' => 'bg-yellow text-white']);
        Status::factory()->create(['name' => 'Implemented', 'classes' => 'bg-green text-white']);
        Status::factory()->create(['name' => 'Closed', 'classes' => 'bg-red text-white']);
        
        Idea::factory(100)->create();

        // Generate unique votes. Ensure idea_id and user_id are unique for each row. 
        foreach (range(1, 20) as $user_id) {
            foreach (range(1, 100) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id, 
                        'idea_id' => $idea_id,
                    ]);
                }
           }
        }
    }
}
