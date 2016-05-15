<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('customers/index');
    }
   
    public function register()
    {
        return view('customers/register');
    }

    public function store()
    {
    	
    }

    public function edit($id)
    {
        return view('customers/edit');
    }
}
