<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CallbackTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /callbacks
     *
     * @group all
     * @group callback
     */
    public function testCallbacksIndex()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/callbacks')
            ->seeStatusCode(200);
    }

    /**
     * GET: /callbacks/register
     *
     * @group all
     * @group callback
     */
    public function testCallbacksRegister()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/callbacks/register')
            ->seeStatusCode(200);
    }

    /**
     * GET: /callbacks/display/{id}
     *
     * @group all
     * @group callback
     */
    public function testCallbackDisplay()
    {
        $user     = factory(App\User::class)->create();
        $callback = factory(App\Callback::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/callbacks/display/' . $callback->id)
            ->seeStatusCode(200);

    }

    /**
     * GET: /callbacks/delete/{id}
     *
     * @group all
     * @group callback
     */
    public function testCallbackDestroy()
    {
        $user     = factory(App\User::class)->create();
        $callback = factory(App\Callback::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/callbacks/delete/' . $callback->id)
            ->seeStatusCode(200);
    }

    /**
     * POST: /callbacks
     *
     * @group all
     * @group callback
     */
    public function testCallbacksPost()
    {
        $user = factory(App\User::class)->create();

        $input = [];

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/callbacks', $input)
            ->seeStatusCode(302);
    }
}
