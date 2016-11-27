<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Bouncer::allow('Administrator')->to(
         [
           'create-user',
           'delete-user',
           'list-users',

           'create-customer',
           'list-customers',
           'edit-user',
           'delete-customer',

           'create-callback',
           'list-callbacks',
           'edit-callback' ,
           'delete-callback',

           'create-department',
           'edit-department',
           'list-departments',
           'delete-department',
         ]
       );
    }
}
