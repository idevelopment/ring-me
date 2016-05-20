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
        $this->call(userTableSeeder::class);
        Model::reguard();
    }
}
