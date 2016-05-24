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
     * Search for a specific role. Through a search query.
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
     * Get a specific role. and display it.
     *
     * @param  int $id the id off the role in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $data['query'] = Roles::find($id);
        return view('roles.specific', $data);
    }


    /**
     * Store a new role in the database.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        return redirect(302)->back();
    }

    /**
     * Display the form for creating a new role.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Get the edit form for the selected role.
     * @param  int $id The role id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['query'] = Roles::find($id);
        return view('roles.edit', $data);
    }

    /**
     * Update a role in the database.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update()
    {
        return redirect()->back(302);
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

