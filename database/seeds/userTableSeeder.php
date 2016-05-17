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
        $data['fname']     = 'Ringme';
        $data['name']     = 'Administrator';
        $data['email']    = 'user@ringme.eu';
        $data['password'] = bcrypt('demo123456');
        User::create($data);
    }
}
