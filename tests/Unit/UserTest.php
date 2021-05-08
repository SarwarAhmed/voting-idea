<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_check_if_user_is_an_admin()
    {
        $userAdmin = User::factory()->make([
            'email' => 'sarwarahmed6@gmail.com',
        ]);
        $userNotAdmin = User::factory()->make([
            'email' => 'user@user.com',
        ]);

        $this->assertTrue($userAdmin->isAdmin());
        $this->assertFalse($userNotAdmin->isAdmin());
    }
}
