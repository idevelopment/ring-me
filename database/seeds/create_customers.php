<?php

use Illuminate\Database\Seeder;
use App\Customer as Customer;

class create_customers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create(array(
        	'company' =>  'iDevelopment',
        	'fname' => 'Ringme',
            'name' => 'Admin',
            'address' => 'Foobar street 4',
            'zipcode' => '3800',
            'city' => 'Sint-Truiden',
            'country' => 'Belgium',
            'email' => 'admin@ringme.eu',
            'phone' => '0',
            'mobile' => '0',
        ));
    }
}
