<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaffController extends Controller
{
    public function profile(){
    	return view('users/profile');
    }
}
