<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

use App\Http\Requests;

class CustomersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    public function index()
    {
        $data['customers'] = Customer::paginate(15);
        return view('customers/index', $data);
    }
   
    public function register()
    {
        return view('customers/register');
    }

    public function store()
    {
        Costumer::create([
            'company' => $input->company,
            'fname'   => $input->fname,
            'name'    => $input->name,
            'address' => $input->address,
            'zipcode' => $input->zipcode,
            'city'    => $input->city,
            'country' => $input->country,
            'phone'   => $input->phone,
            'mobile'  => $input->mobile,
            'vat'     => $input->vat
        ]);

        session()->flash('message', 'Costumer created');
        return redirect()->back(302);
    }

    public function edit($id)
    {
        $data['customer'] = Customer::where('id', $id)->get();
        return view('customers/edit', $data);
    }
}
