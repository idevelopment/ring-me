<?php

namespace App\Http\Controllers;

use App\Countries;
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
     * The customer index view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
      $user = auth()->user();

      if ($user->is('Agent') || $user->is('Manager') || $user->is('Administrator')) {
        $data['customers'] = Customer::orderBy('status' , 'asc')->paginate(15);
        return view('customers/index', $data);
      }
        return redirect()->back();
    }

    /**
     * The register view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        $user = auth()->user();

        if ($user->is('Agent') || $user->is('Manager') || $user->is('Administrator')) {
            $data['countries'] = Countries::all();
            return view('customers/register', $data);
        }

        return redirect()->back();
    }

    /**
     * Store a new customer in the database.
     *
     * @param  Requests\CustomerValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\CustomerValidator $input)
    {
        $user = auth()->user();

        if (! $user->is('Guest') || ! $user->is('Agent') || ! $user->is('Manager') || ! $user->is('Administrator'))
        {
          Customer::create($input->except('_token'));
          session()->flash('message', 'Customer created');
          return redirect()->to('/customers');
        }

        return redirect()->back();
    }

    /**
     * The edit view for a customer
     *
     * @param  int $id the id in the database customer table.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $user = auth()->user();

        if(! $user->is('Customer') || ! $user->is('Agent') || ! $user->is('Manager') || ! $user->is('Administrator')) {
          $data['customer'] = Customer::where('id', $id)->get();
          return view('customers/edit', $data);

      }

        return redirect()->back();
    }
}
