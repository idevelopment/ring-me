<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Roles;

class RolesController extends Controller
{
    public function index()
    {
    	$data['roles'] = Roles::all();
    	return view('roles.index', $data);
    }

    public function store()
    {
    	return view('roles.index');
    }    
}
