<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RoleControllerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /roles
     *
     * @group all
     * @group roles
     */
    public function testRolesIndex()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/roles')
            ->seeStatusCode(200);
    }

    /**
     * GET: /roles/create
     *
     * @group all
     * @group roles
     */
    public function testRolesCreate()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/roles/create')
            ->seeStatusCode(200);
    }

    /**
     * POST: /roles/create
     *
     * @group all
     * @group roles
     */
    public function testRolesCreatePost()
    {
        $user  = factory(App\User::class)->create();
        $input = ['name' => 'new role'];

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/roles/create', $input)
            ->seeInDatabase('roles', $input)
            ->seeStatusCode(302);
    }

    /**
     * GET: /roles/edit/{id}
     *
     * @group all
     * @group roles
     */
    public function testRolesEdit()
    {
        $user  = factory(App\User::class)->create();
        $roles = factory(App\Roles::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/roles/edit/' . $roles->id)
            ->seeStatusCode(200);
    }

    /**
     * POST: /roles/edit/{id}
     *
     * @group all
     * @group roles
     */
    public function testRolesEditPost()
    {
        $user  = factory(App\User::class)->create();
        $role  = factory(App\Roles::class)->create();
        $input = ['name', 'Updated role'];

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->seeInDatabase('roles', ['id' => $role->id, 'name' => $role->name])
            ->post('/roles/edit/' . $role->id, $input)
            ->seeStatusCode(302);
    }

    /**
     * GET: /roles/delete/{id}
     *
     * @group all
     * @group roles
     */
    public function testRolesDelete()
    {
        $roles = factory(App\Roles::class)->create();
        $user  = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/roles/delete/' . $roles->id)
            ->seeStatusCode(200);
    }

    /**
     * POST: /roles/search
     *
     * @group all
     * @group roles
     */
    public function testRolesSearch()
    {
        $user  = factory(App\User::class)->create();
        $roles = factory(App\Roles::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('/roles/search', ['term' => $roles->name])
            ->seeStatusCode(200);
    }

    /**
     * GET: /roles/show/{id}
     *
     * @group all
     * @group roles
     */
    public function testRolesShow()
    {
        $roles = factory(App\Roles::class)->create();
        $user  = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/roles/show/' . $roles->id)
            ->seeStatusCode(200);
    }
}
