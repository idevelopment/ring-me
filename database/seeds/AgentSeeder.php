<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data['fname']    = 'Ringme';
        $data['name']     = 'Agent';
        $data['email']    = 'agent@ringme.eu';
        $data['password'] = bcrypt('demo123456');
        $data['biography'] = nl2br('Lorem ipsum dolor sit amet, velit putant referrentur in cum, vix admodum tractatos necessitatibus ad, dolore libris eu eum.');        
        $user = User::create($data);
        Bouncer::assign('Agent')->to($user);
    }
}
