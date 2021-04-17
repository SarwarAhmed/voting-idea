<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Idea;
use App\Models\Status;
use App\Models\Category;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_on_main_page()
    {
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);
        $statusConsidering = Status::factory()->create(['name' => 'Considering', 'classes' => 'bg-purple text-white']);

        $firstIdea = Idea::factory()->create([
            'title' => 'my first idea', 
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id,
        ]);
        
        $SecondIdea = Idea::factory()->create([
            'title' => 'my first idea',
            'category_id' => $categoryTwo->id,
            'status_id' => $statusConsidering->id,
        ]);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();

        $response->assertSee($firstIdea->title);
        $response->assertSee($firstIdea->Description);
        $response->assertSee($categoryOne->name);
        $response->assertSee('<div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>', false);
        $response->assertSee($SecondIdea->title);
        $response->assertSee($SecondIdea->Description);
        $response->assertSee($categoryTwo->name);
        $response->assertSee('<div class="bg-purple text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Considering</div>', false);

        // testing same idea title diffrence slugs
        $this->assertEquals('my-first-idea', $firstIdea->slug);
        $this->assertEquals('my-first-idea-2', $SecondIdea->slug);
    }

    /** @test */
    public function showing_single_idea_correctly_on_the_show_page()
    {
        $category = Category::factory()->create(['name' => 'Livewire']);
        $status = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);

        $idea = Idea::factory()->create([
            'category_id' => $category->id,
            'status_id' => $status->id,
            'title' => 'My First Idea',
            'description' => 'Description of my first idea',
        ]);

        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();

        $response->assertSee($idea->title);
        $response->assertSee($idea->Description);
        $response->assertSee($category->name);
        $response->assertSee('<div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>', false);
    }

    /** @test */
    public function idea_pagination_test()
    {
        $category = Category::factory()->create();
       
        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);
        
        Idea::factory(Idea::PAGINATION_COUNT + 1)->create([
            'category_id' => $category->id,
            'status_id' => $statusOpen->id,
        ]);

        $ideaOne = Idea::find(1);
        $ideaOne->title = "My First Idea";
        $ideaOne->save();

        $ideaEleven = Idea::find(11);
        $ideaEleven->title = "My Eleven Idea";
        $ideaEleven->save();
        
        $response = $this->get('/');
        $response->assertSee($ideaOne->title);
        $response->assertDontSee($ideaEleven->title);
        
        $response = $this->get('/?page=2');
        $response->assertSee($ideaEleven->title);
        $response->assertDontSee($ideaOne->title);
    }
}
