<?php

namespace App\Http\Controllers;

use App\Products;
use App\ProductsCategories;
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
        $data['products'] = Products::paginate(15);
        $data['category'] = ProductsCategories::paginate(15);

        return view('products.index', $data);
    }

    public function categories()
    {
        return view('products.categories');
    }

    /**
     * [METHOD]: Add a new product in the database.
     *
     * @url:platform  POST: /products/save
     * @see:phpunit   TODO: write phpunit test in a later version.
     *
     * @param Requests\ProductValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\ProductValidator $input)
    {
        $product       = new Products();
        $product->name = $input->name;

        $product->category()->associate($input->category);
        $product->save();

        session()->flash('message', trans('products.flashInsert'));
        return redirect()->back();
    }
}
