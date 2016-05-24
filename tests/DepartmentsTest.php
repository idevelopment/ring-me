<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DepartmentsTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * POST: departments
     *
     * Add a department
     *
     * @group all
     * @group departments
     */
    public function testDepartmentsPost()
    {
        $this->withoutMiddleware();
        $user = factory(App\User::class)->create();

        $data['name']    = 'new department';
        $data['manager'] = $user->id;

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->post('departments', $data)
            ->seeInDatabase('departments', $data)
            ->seeStatusCode(302);
    }

    /**
     * GET: departments
     *
     * Get all the departments.
     *
     * @group all
     * @group departments
     */
    public function testDepartmentsGet()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/departments')
            ->seeStatusCode(200);
    }

    /**
     * GET: departments/{departments}
     *
     * Get a specific department.
     *
     * @group all
     * @group departments
     */
    public function testDepartmentsSpecificGet()
    {
        $user = factory(App\User::class)->create();
    }

    /**
     * DESTROY: departments/{departments}
     *
     * Kick a department out off the database.
     *
     * @group all
     * @group departments
     */
    public function testDepartmentsDestroy()
    {
        $user       = factory(App\User::class)->create();
        $department = factory(App\Departments::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->seeInDatabase('departments', ['id' => $department->id])
            ->delete('/departments/' . $department->id)
            ->dontSeeInDatabase('departments', ['id' => $department->id])
            ->seeStatusCode(302);
    }

    /**
     * PUT|PATCH: departments/{departments}
     *
     * Edit a department in the database
     *
     * @group all
     * @group departments
     */
    public function testDepartmentsPatch()
    {
        $user       = factory(App\User::class)->create();
        $department = factory(App\Departments::class)->create();

        $begin['name']    = $department->name;
        $begin['manager'] = $department->manager;

        $data['name']    = 'new department';
        $data['manager'] = 25;

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->seeInDatabase('departments', $begin)
            ->put('departments/' . $department->id, $data)
            ->dontSeeInDatabase('departments', $begin)
            ->seeInDatabase('departments', $data)
            ->seeStatusCode(302);
    }

    /**
     * GET: departments/{departments}/edit
     *
     * Get the edit view for a department
     *
     * @group all
     * @group departments
     */
    public function testDepartmentsEditView()
    {
        $user       = factory(App\User::class)->create();
        $department = factory(App\Departments::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('departments/' . $department->id . '/edit')
            ->seeStatusCode(200);
    }
}
