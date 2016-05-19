<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CallbackController extends Controller
{
    public function index()
    {
    	return view('callbacks/list');
    }

    public function edit($id)
    {
    	return view('callbacks/details');
    }

}
