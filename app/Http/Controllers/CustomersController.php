<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer as Customer;

class CustomersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['customers'] = Customer::All();
        return view('customers/index', $data);
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
        $data['customer'] = Customer::where('id', $id)->get();
        return view('customers/edit', $data);
    }
}
