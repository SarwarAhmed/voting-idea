<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Idea;
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

        $firstIdea = Idea::factory()->create([
            'title' => 'my first idea', 
            'category_id' => $categoryOne->id,
        ]);
        
        $SecondIdea = Idea::factory()->create([
            'title' => 'my first idea',
            'category_id' => $categoryTwo->id,
        ]);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();

        $response->assertSee($firstIdea->title);
        $response->assertSee($firstIdea->Description);
        $response->assertSee($categoryOne->name);
        $response->assertSee($SecondIdea->title);
        $response->assertSee($SecondIdea->Description);
        $response->assertSee($categoryTwo->name);

        // testing same idea title diffrence slugs
        $this->assertEquals('my-first-idea', $firstIdea->slug);
        $this->assertEquals('my-first-idea-2', $SecondIdea->slug);
    }

    /** @test */
    public function showing_single_idea_correctly_on_the_show_page()
    {
        $category = Category::factory()->create(['name' => 'Livewire']);

        $idea = Idea::factory()->create();

        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();

        $response->assertSee($idea->title);
        $response->assertSee($idea->Description);
        $response->assertSee($category->name);
    }

    /** @test */
    public function idea_panation_test()
    {
        $category = Category::factory()->create();
       
        Idea::factory(Idea::PAGINATION_COUNT + 1)->create(['category_id' => $category->id]);

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
