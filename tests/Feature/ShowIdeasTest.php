<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Idea;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_on_main_page()
    {
        $firstIdea = Idea::factory()->create(['title' => 'my first idea']);
        
        $SecondIdea = Idea::factory()->create(['title' => 'my first idea']);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();

        $response->assertSee($firstIdea->title);
        $response->assertSee($firstIdea->Description);
        $response->assertSee($SecondIdea->title);
        $response->assertSee($SecondIdea->Description);


        $this->assertEquals('my-first-idea', $firstIdea->slug);
        $this->assertEquals('my-first-idea-2', $SecondIdea->slug);
    }

    /** @test */
    public function showing_single_idea_correctly_on_the_show_page()
    {
        $idea = Idea::factory()->create();

        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();

        $response->assertSee($idea->title);
        $response->assertSee($idea->Description);
    }

    /** @test */
    public function idea_panation_test()
    {
        Idea::factory(Idea::PAGINATION_COUNT + 1)->create();

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
