<?php

namespace App\Http\Controllers;

use App\Departments;
use App\User;
use App\Roles;

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
        $user = auth()->user();

        if (! $user->is('Manager') || ! $user->is('Administrator')) {
            return redirect()->back();
        }

        $data['departments'] = Departments::all();
        return view('staff.create', $data);
    }

    /**
     * Store the new member in the database
     *
     * @TODO:  Needs phpunit test.
     * @param  Requests\NewStaffValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\NewStaffValidator $input)
    {
        $user = auth()->user();

        if (! $user->is('Manager') || ! $user->is('Administrator')) {
            return redirect()->back();
        }

        $newUser = User::create($input->except(['_token', 'department']))->id;
        User::find($newUser)->departments()->attach($input->department);

        session()->flash('message', 'New staff member created');
        return redirect()->back(302);
    }

    /**
     * Update the staff member.
     *
     * @TODO:  Needs phpunit test
     * @param  Requests\NewStaffValidator $input
     * @param  int $id The staff member id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Requests\NewStaffValidator $input, $id)
    {
        $user = auth()->user();

        if (! $user->is('Manager') || ! $user->is('Administrator')) {
            return redirect()->back();
        }

        User::find($id)-update($input->except('_token'));
        session()->flash('message', 'Staff member has been updated');
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
        $data["departments"] = Departments::all();
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
        $user = auth()->user();

        if (! $user->is('Manager') || ! $user->is('Administrator')) {
            return redirect()->back();
        }

        $user = User::find($id);
        $user->roles()->sync([]);

        User::destroy($id);
        session()->flash('message', 'User deleted');

        return redirect()->to('/staff');
    }

    public function get_roles()
    {
        $items = Roles::all();
        $data2 = [];
        foreach($items as $role)
        {
         $data2[] = [
        'value' => $role["id"],
        'text'  => $role["name"]
        ];

        }
        return json_encode($data2);
    } 

}
