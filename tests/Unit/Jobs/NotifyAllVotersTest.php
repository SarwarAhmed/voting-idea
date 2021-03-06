<?php

namespace Tests\Unit\Jobs;

use Tests\TestCase;
use App\Models\Idea;
use App\Models\User;
use App\Models\Vote;
use App\Models\Status;
use App\Models\Category;
use App\Jobs\NotifyAllVoters;
use Illuminate\Support\Facades\Mail;
use App\Mail\IdeaStatusUpdatedMailable;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NotifyAllVotersTest extends TestCase
{
    use RefreshDatabase;

     /** @test */
     public function it_sends_an_email_to_all_voters()
     {
         $user = User::factory()->create([
             'email' => 'sarwarahmed6@gmail.com',
         ]);
 
         $userB = User::factory()->create([
             'email' => 'user@user.com',
         ]);
 
         $idea = Idea::factory()->create();
 
         Vote::create([
             'idea_id' => $idea->id,
             'user_id' => $user->id,
         ]);
 
         Vote::create([
             'idea_id' => $idea->id,
             'user_id' => $userB->id,
         ]);
 
         Mail::fake();
 
         NotifyAllVoters::dispatch($idea);
 
         Mail::assertQueued(IdeaStatusUpdatedMailable::class, function ($mail) {
             return $mail->hasTo('sarwarahmed6@gmail.com')
                 && $mail->build()->subject === 'An idea you voted for has a new Status';
         });
 
         Mail::assertQueued(IdeaStatusUpdatedMailable::class, function ($mail) {
             return $mail->hasTo('user@user.com')
                 && $mail->build()->subject === 'An idea you voted for has a new Status';
         });
     }
}
