<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class create_callbacks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      DB::table('callbacks')->insert([
        [
        'department'  =>  '1',
        'agent_id'    =>  '1',
        'customer'    =>  '1',
        'status'      =>  'open',
        'created_at'  => date("Y-m-d H:i:s"),
        'updated_at'  => date("Y-m-d H:i:s"),
        'description' => nl2br($faker->text($maxNbChars = 200)),
        ],
        [
        'department'  =>  '2',
        'agent_id'    =>  '2',
        'customer'    =>  '1',
        'status'      =>  'in_progress',
        'created_at'  => date("Y-m-d H:i:s"),
        'updated_at'  => date("Y-m-d H:i:s"),
        'description' => nl2br($faker->text($maxNbChars = 200)),
        ],
        [
        'department'  =>  '3',
        'agent_id'    =>  '2',
        'customer'    =>  '1',
        'status'      =>  'closed',
        'created_at'  => date("Y-m-d H:i:s"),
        'updated_at'  => date("Y-m-d H:i:s"),
        'description' => nl2br($faker->text($maxNbChars = 200)),
        ],
         ]);
    }
}
