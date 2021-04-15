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
        $firstIdea = Idea::factory()->create();
        
        $SecondIdea = Idea::factory()->create();

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();

        $response->assertSee($firstIdea->title);
        $response->assertSee($firstIdea->Description);
        $response->assertSee($SecondIdea->title);
        $response->assertSee($SecondIdea->Description);
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
}
