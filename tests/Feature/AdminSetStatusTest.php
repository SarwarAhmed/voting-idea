<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Idea;
use App\Models\User;
use App\Models\Status;
use Livewire\Livewire;
use App\Models\Category;
use App\Jobs\NotifyAllVoters;
use App\Http\Livewire\SetStatus;
use Illuminate\Support\Facades\Queue;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminSetStatusTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function shwo_page_contains_set_status_livewire_component_when_user_is_admin()
    {
        $admin = User::factory()->admin()->create();
        $idea = Idea::factory()->create();

        $this->actingAs($admin)
            ->get(route('idea.show', $idea))
            ->assertSeeLivewire('set-status'); 
    }

    /** @test */
    public function show_page_does_notcontain_set_status_livewire_component_when_user_is_not_admin()
    {
        $userNotAdmin = User::factory()->create(['name' => 'Category 1']);
        $idea = Idea::factory()->create();
        
        $this->actingAs($userNotAdmin)
            ->get(route('idea.show', $idea))
            ->assertDontSeeLivewire('set-status');
    }

    /** @test */
    public function initial_status_is_set_correctly()
    {
        $admin = User::factory()->admin()->create();

        $statusConsidering = Status::factory()->create(['id' => 2, 'name' => 'Considering']);

        $idea = Idea::factory()->create([
            'status_id' => $statusConsidering->id,
        ]);
        
        Livewire::actingAs($admin)
            ->test(SetStatus::class, [
                'idea' => $idea,
            ])
            ->assertSet('status', $statusConsidering->id);
    }

    /** @test */
    public function can_set_status_correctly()
    {
        $admin = User::factory()->admin()->create(); 

        $statusConsidering = Status::factory()->create(['id' => 2, 'name' => 'Considering']);
        $statusInProgress = Status::factory()->create(['id' => 3, 'name' => 'In Progress']);

        $idea = Idea::factory()->create([
            'status_id' => $statusConsidering->id,
        ]);

        Livewire::actingAs($admin)
            ->test(SetStatus::class, [
                'idea' => $idea,
            ])
            ->set('status', $statusInProgress->id)
            ->call('setStatus')
            ->assertEmitted('statusWasUpdated');

        $this->assertDatabaseHas('ideas', [
            'id' => $idea->id,
            'status_id' => $statusInProgress->id,
        ]);
    }

    /** @test */
    public function can_set_status_correctly_while_notifying_all_voters()
    {
        $admin = User::factory()->admin()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusConsidering = Status::factory()->create(['id' => 2, 'name' => 'Considering']);
        $statusInProgress = Status::factory()->create(['id' => 3, 'name' => 'In Progress']);

        $idea = Idea::factory()->create([
            'status_id' => $statusConsidering->id,
        ]);

        Queue::fake();

        Queue::assertNothingPushed();

        Livewire::actingAs($admin)
            ->test(SetStatus::class, [
                'idea' => $idea,
            ])
            ->set('status', $statusInProgress->id)
            ->set('notifyAllVoters', true)
            ->call('setStatus')
            ->assertEmitted('statusWasUpdated');

        Queue::assertPushed(NotifyAllVoters::class);
    }
}
