<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Departments;
use App\Segments;
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


}
