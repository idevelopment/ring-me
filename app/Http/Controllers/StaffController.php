<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaffController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		$data['users'] = User::all();
    	return view('users/index', $data);
    }


    public function profile()
    {
    	return view('users/profile');
    }
}
