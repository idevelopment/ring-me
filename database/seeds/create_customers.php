<?php

use Illuminate\Database\Seeder;
use App\Customer as Customer;
use Faker\Factory as Faker;

class create_customers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++)
{
        Customer::create(array(
        	'company' =>  $faker->company,
        	'fname' => $faker->firstName,
            'name' => $faker->lastName,
            'address' => $faker->address,
            'zipcode' => $faker->postcode,
            'city' => $faker->city,
            'country' => $faker->country,
            'email' => $faker->email,
            'phone' => $faker->e164PhoneNumber,
            'mobile' => $faker->e164PhoneNumber,
        ));
      }
    }
}
