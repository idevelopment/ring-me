<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Departments;
use App\Segments;
use App\Customer;
use App\User;
use App\ProductsCategories;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('lang');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["department"] = Departments::all();
        $data["agents"] = User::all();

        return view('welcome', $data);
    }

    /**
     * Show the customer registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function signup()
    {
      $data["segments"] = Segments::all();
      $data['category'] = ProductsCategories::with('products')->paginate(10)->sortBy("name")->all();

      return view('auth.register', $data);
    }

    /**
     * Save the customer.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerCustomer(Request $request)
    {
      $customer = new Customer;
      $customer->name    = $request->fname.$request->lname;
      $customer->fname   = $request->fname;
      $customer->lname   = $request->name;
      $customer->address = $request->address;
      $customer->zipcode = $request->zipcode;
      $customer->city    = $request->city;
      $customer->country = $request->country;
      $customer->email   = $request->email;
      $customer->phone   = $request->phone;
      $customer->mobile  = $request->mobile;
      $customer->status  = 'new';

      $customer->save();

      session()->flash('message', trans('customers.registered'));

      return redirect()->to('/');
    }


}
