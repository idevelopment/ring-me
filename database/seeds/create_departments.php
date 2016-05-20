<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class create_departments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
        	[
        	'name' =>  'Administration',
        	'manager' =>  '1',        	
        	],
        	[
        	'name' =>  'Sales',
        	'manager' =>  '1',        	
        	],
        	[
        	'name' =>  'Technical',
        	'manager' =>  '1',        	
        	]        	
           ]);
    }
}