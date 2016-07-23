<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Artisan;

/**
 * Class CostumerTest
 */
class CostumerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /customers
     *
     * @group all
     * @group customer
     */
    public function testCustomerIndex()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/customers')
            ->seeStatusCode(200);
    }
    
    /**
     * GET: /customers/register
     * 
     * @group all 
     * @group customer
     */
    public function testCustomerRegisterView()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/customers/register')
            ->seeStatusCode(200);
    }

    /**
     * GET: /customers/display/{id}
     *
     * @group all
     * @group customer
     */
    public function testCustomerEditView()
    {
        $user     = factory(App\User::class)->create();
        $costumer = factory(App\Customer::class)->create();

        Artisan::call('bouncer:seed');
        Bouncer::assign('Administrator')->to($user);

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('customers/display/' . $costumer->id)
            ->seeStatusCode(200);
    }

    /**
     * POST: /customers
     *
     * - With validation errors
     *
     * @group all
     * @group customer
     */
    public function testCustomerWithvalidationErrors()
    {
        $this->withoutMiddleware();

        $user  = factory(App\User::class)->create();
        $input = [];

        Artisan::call('bouncer:seed');
        Bouncer::assign('Administrator')->to($user);

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/customers', $input)
            ->seeStatusCode(302)
            ->assertHasOldInput();
    }

    /**
     * POST: /customers
     *
     * - Without: /customers
     *
     * @group all
     * @group customer
     */
    public function testCustomerWithOutValidationErrors()
    {
        $this->withoutMiddleware();
        $user = factory(App\User::class)->create();

        $input['company'] = 'company';
        $input['fname']   = 'firstname';
        $input['name']    = 'name';
        $input['address'] = 'address';
        $input['zipcode'] = 'zipcode';
        $input['city']    = 'city';
        $input['country'] = 'country';
        $input['phone']   = 'phone number';
        $input['mobile']  = 'mobile number';
        $input['email']   = 'jhon@doe.com';
        $input['vat']     = 'vat number';

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/customers', $input)
            //->seeInDatabase('customers', $input)
            ->seeStatusCode(302);
    }
}
