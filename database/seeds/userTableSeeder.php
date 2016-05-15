<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $data['name']     = 'ringme';
        $data['email']    = 'user@ringme.be';
        $data['password'] = bcrypt('demo123456');

        User::create($data);
    }
}
