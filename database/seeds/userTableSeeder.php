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
        DB::table('users')->delete();
        $user = User::create(array('name' => 'Adminisrator',
                    'fname' => 'RingMe',
                    'email' => 'user@ringme.eu',
                    'password' => bcrypt("demo123456"),
                ));

        Bouncer::assign('Administrator')->to($user);
    }
}
