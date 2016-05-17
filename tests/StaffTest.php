<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Artisan;

class StaffTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /staff
     *
     * @group all
     * @group staff
     */
    public function testStaffUri()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/staff')
            ->seeStatusCode(200);
    }

    /**
     * GET: /status/available
     *
     * @group all
     * @group staff
     */
    public function testSetAvailable()
    {
        $user = factory(App\User::class)->create();

        Artisan::call('bouncer:seed');
        Bouncer::assign('unavailable')->to($user);

        $this->actingAs($user)
            ->visit('/status/available')
            ->seeStatusCode(200);

        $this->assertFalse(auth()->user()->is('unavailable'));
        $this->assertTrue(auth()->user()->is('available'));
    }

    /**
     * GET: /status/unavailable
     *
     * @group all
     * @group staff
     */
    public function testSetUnavailable()
    {
        $user = factory(App\User::class)->create();

        Artisan::call('bouncer:seed');
        Bouncer::assign('available')->to($user);

        $this->actingAs($user)
            ->visit('/status/unavailable')
            ->seeStatusCode(200);

        $this->assertFalse(auth()->user()->is('available'));
        $this->assertTrue(auth()->user()->is('unavailable'));
    }

    /**
     * GET: /profile
     *
     * @group all
     * @group staff
     */
    public function testProfileUri()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/profile')
            ->seeStatusCode(200);
    }
}
