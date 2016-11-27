<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data['fname']    = 'Ringme';
        $data['name']     = 'Administrator';
        $data['email']    = 'user@ringme.eu';
        $data['password'] = bcrypt('demo123456');
        $user = User::create($data);
        Bouncer::assign('Administrator')->to($user);
    }
}
