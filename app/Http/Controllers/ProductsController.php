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
        $data['products'] = Products::with('category')->paginate(10);
        $data['category'] = ProductsCategories::paginate(10)->sortBy("name");

        return view('products.index', $data);
    }

    public function categories()
    {
        $data['category'] = ProductsCategories::paginate(10)->sortBy("name");
        return view('products.categories', $data);
    }

    public function edit_categories($id)
    {
      $data['category'] = ProductsCategories::find($id);
      return view('products.edit_category', $data);
    }

    public function remove_category($id)
    {
      $category = ProductsCategories::find($id);
      $category->delete();

      session()->flash('message', trans('products.removed_category'));
      return redirect()->back();
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
        $this->validate($input, [
          'name' => 'required',
          'category' => 'required',
         ]);

        $product       = new Products();
        $product->name = $input->name;

        $product->category()->associate($input->category);
        $product->save();

        session()->flash('message', trans('products.saved'));
        return redirect()->back();
    }

    /**
     * [METHOD]: Add a new product category in the database.
     *
     * @url:platform  POST: /products/categories/save
     *
     * @param Requests\ProductValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveCat(Request $input)
    {
      $this->validate($input, [
        'name' => 'required|unique:products_categories'
       ]);

        $category       = new ProductsCategories();
        $category->name = $input->name;
        $category->save();

        session()->flash('message', trans('products.category_saved'));
        return redirect()->back();
    }


    public function remove($id)
    {
      $product = Products::find($id);
      $product->delete();

      session()->flash('message', trans('products.removed'));
      return redirect()->back();
    }
}
