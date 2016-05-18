<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class HomeTest
 */
class HomeTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /Home
     *
     * @group all
     */
    public function testHomeView()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/home')
            ->seeStatusCode(200);
    }
}
