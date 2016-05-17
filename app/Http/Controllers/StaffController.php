<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Bouncer;

class StaffController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * Display all the staff.
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
	{
		$data['users'] = User::all();
    	return view('users/index', $data);
    }

    /**
     * Set the user available.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setAvailable()
    {
        $user = User::find(auth()->user()->id);
        Bouncer::retract('unavailable')->from($user);
        Bouncer::assign('available')->to($user);

        return redirect()->back(302);
    }

    /**
     * Set the user unavailable.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setUnavailable()
    {
        $user = User::find(auth()->user()->id);
        Bouncer::retract('available')->from($user);
        Bouncer::assign('unavailable')->to($user);

        return redirect()->back(302);
    }

    /**
     * Display the profile.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile()
    {
    	return view('users/profile');
    }
}
