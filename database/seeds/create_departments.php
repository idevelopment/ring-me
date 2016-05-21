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
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),
        	],
        	[
        	'name' =>  'Sales',
        	'manager' =>  '1',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),       	
        	],
        	[
        	'name' =>  'Technical',
        	'manager' =>  '1',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s"),    	
        	]        	
           ]);
    }
}