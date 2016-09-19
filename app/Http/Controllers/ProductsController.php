<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
    /**
     * ProductsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    public function index()
    {
        return view('products.index');
    }

    public function categories()
    {
        return view('products.categories');
    }

    public function store()
    {

    }
}
