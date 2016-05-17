<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class CostumerTest
 */
class CostumerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * POST: /costumers
     *
     * @group all
     * @group costumer
     */
    public function testCustomerPost()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeInDatabase('users', $user)
            ->seeIsAuthenticatedAs($user)
            ->visit('costumers');
    }

    /**
     * GET: /costumers
     *
     * @group all
     * @group costumer
     */
    public function testCustomer()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeInDatabase('users', $user)
            ->visit('costumers')
            ->seeIsAuthenticatedAs($user);
    }

    /**
     * GET: /costumer/register
     *
     * @group all
     * @group costumer
     */
    public function testCustumerRegister()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeInDatabase('users', $user)
            ->visit('/costumer/register')
            ->seeIsAuthenticatedAs($user);
    }

    /**
     * GET: /customers/display/{id}
     *
     * @group all
     * @group costumer
     */
    public function testCustomerSpecific()
    {
        $user     = factory(App\User::class)->create();
        $costumer =

        $this->actingAs($user)
            ->seeInDatabase('users', $user)
            ->seeIsAuthenticatedAs($user);
    }
}
