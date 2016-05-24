<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Roles;

class RolesController extends Controller
{
    /**
     * Get the role overview.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    	$data['roles'] = Roles::all();
    	return view('roles.index', $data);
    }

    /**
     * Search for a specific role.
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $term = $request->get('term');
        $data['roles'] = Roles::where('name', 'LIKE', "$term")->get();
        return view('roles.index', $data);
    }

    /**
     * Create a role in the database.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store()
    {

    }

    

    /**
     * Destroy a role out off the database.
     *
     * @param  int $id The id in the database for the role.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Roles::destroy($id);
        session()->flash('message', 'Role deleted');
        return redirect()->back(302);
    }
}
