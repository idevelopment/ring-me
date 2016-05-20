<?php

namespace App\Http\Controllers;

use App\User;
use Chrisbjr\ApiGuard\Models\ApiKey;
use Illuminate\Http\Request;

use App\Http\Requests;
use Bouncer;

/**
 * Class StaffController
 * @package App\Http\Controllers
 */
class StaffController extends Controller
{

    /**
     * StaffController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * Create new staff member.
     *
     * @TODO   Build up the view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store the new member in the database
     *
     * @TODO:  Needs phpunit test.
     * @TODO:  Build up the controller logic.
     * @TODO:  Build up the request validator.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        return redirect()->back(302);
    }

    /**
     * Update the staff member.
     *
     * @TODO:  Needs phpunit test
     * @TODO:  Build up the controller.
     * @TODO:  BUild up the request validator.
     * @param  int $id The staff member id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {
        return redirect()->back(302);
    }

    /**
     * Edit view for a staff member.
     *
     * @TODO   Build up the view.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['query'] = User::find($id);
        return view('staff.edit', $data);
    }

    /**
     * Display all the staff.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
	{
		$data['users'] = User::paginate(15);
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
        $id = auth()->user()->id;
        $data['tokens'] = ApiKey::where('user_id', $id)->get();
    	return view('users/profile', $data);
    }

    /**
     * Destroy or multiple staff members.
     *
     * @param  int $id THe id off the staff member in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->roles()->sync([]);

        User::destroy($id);
        session()->flash('message', 'User deleted');

        return redirect()->to('/staff');
    }
}
