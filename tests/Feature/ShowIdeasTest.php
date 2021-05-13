<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Idea;
use App\Models\User;
use App\Models\Status;
use App\Models\Category;
use Database\Factories\IdeaFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_on_main_page()
    {
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);

        $statusOpen = Status::factory()->create(['name' => 'OpenUnique']);
        $statusConsidering = Status::factory()->create(['name' => 'ConsideringUnique']);

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
        $response->assertSee('OpenUnique');
        $response->assertSee($SecondIdea->title);
        $response->assertSee($SecondIdea->Description);
        $response->assertSee($categoryTwo->name);
        $response->assertSee('ConsideringUnique');

        // testing same idea title diffrence slugs
        $this->assertEquals('my-first-idea', $firstIdea->slug);
        $this->assertEquals('my-first-idea-2', $SecondIdea->slug);
    }

    /** @test */
    public function showing_single_idea_correctly_on_the_show_page()
    {
        $category = Category::factory()->create(['name' => 'Livewire']);
        $status = Status::factory()->create(['name' => 'OpenUnique']);

        $idea = Idea::factory()->create([
            'category_id' => $category->id,
            'status_id' => $status->id,
            'title' => 'My First Idea',
        ]);

        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();

        $response->assertSee($idea->title);
        $response->assertSee($idea->Description);
        $response->assertSee($category->name);
        $response->assertSee('OpenUnique');
    }

    /** @test */
    public function idea_pagination_test()
    {
        Idea::factory(Idea::PAGINATION_COUNT + 1)->create();

        $ideaOne = Idea::find(1);
        $ideaOne->title = "My First Idea";
        $ideaOne->save();

        $ideaOnSecondPage = Idea::find(Idea::PAGINATION_COUNT + 1);
        $ideaOnSecondPage->title = 'My Idea On Second Page';
        $ideaOnSecondPage->save();
        
        $response = $this->get('/');

        $response->assertSee($ideaOnSecondPage->title);
        $response->assertDontSee($ideaOne->title);
        
        $response = $this->get('/?page=2');

        $response->assertSee($ideaOne->title);
        $response->assertDontSee($ideaOnSecondPage->title);
    }

    /** @test */
    public function in_app_back_button_works_when_index_page_visited_first()
    {
        $idea = Idea::factory()->create();

        $response = $this->get('/?category=Category%202&status=Considering');
        $response = $this->get(route('idea.show', $idea));

        $this->assertStringContainsString('/?category=Category%202&status=Considering', $response['backUrl']);
    }

    /** @test */
    public function in_app_back_button_works_when_show_page_only_page_visited()
    {
        $ideaOne = Idea::factory()->create([
            'title' => 'My First Idea',
        ]);

        $response = $this->get(route('idea.show', $ideaOne));

        $this->assertEquals(route('idea.index'), $response['backUrl']);
    }
}
