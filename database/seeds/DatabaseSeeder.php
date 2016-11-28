<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(create_customers::class);
        $this->call(create_departments::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(CountrySeed::class);
        $this->call(SegmentsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(userTableSeeder::class);
        $this->call(AgentSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(DepartmentUsers::class);

        Model::reguard();
    }
}
