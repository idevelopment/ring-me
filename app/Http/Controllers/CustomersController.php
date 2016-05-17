<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

use App\Http\Requests;

class CustomersController extends Controller
{

    /**
     * CustomersController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * The costumer index view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['customers'] = Customer::paginate(15);
        return view('customers/index', $data);
    }

    /**
     * The register view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        return view('customers/register');
    }

    /**
     * Store a new costumer in the database.
     *
     * @param  Requests\CustomerValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\CustomerValidator $input)
    {
        Customer::create($input->except('_token'));

        session()->flash('message', 'Costumer created');
        return redirect()->back(302);
    }

    /**
     * The edit view for a costumer
     *
     * @param  int $id the id in the database costumer table.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['customer'] = Customer::where('id', $id)->get();
        return view('customers/edit', $data);
    }
}
