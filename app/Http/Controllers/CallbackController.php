<?php

namespace App\Http\Controllers;

use App\Callback;
use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Http\Requests;

use Faker\Factory as Faker;

/**
 * Class CallbackController
 * @package App\Http\Controllers
 */
class CallbackController extends Controller
{
    // TODO: Create update method.
    // TODO: Add logic for the callback destory method.
    // TODO: Add logic for the store method.

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * Display all the callbacks.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['callback'] = Callback::with('users', 'customers', 'departments')->get();
        $data['users'] = User::all();
    	return view('callbacks/list', $data);
    }


    /**
     * Create a new callback.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $user = auth()->user();

        if (! $user->is('Agent') || ! $user->is('Manager') || ! $user->is('Administrator')) {
            return redirect()->back();
        }

        return view('callbacks.create');
    }

    /**
     * Store a callback request.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $user = auth()->user();

      //  Callback::create($input->except('_token', 'product', 'description'));
      $faker = \Faker\Factory::create();
      $Callback = new Callback;

      $Callback->type = $faker->numberBetween($min = 1, $max = 3);
      $Callback->customer = $faker->numberBetween($min = 1, $max = 9);
      $Callback->agent_id = '1';
      $Callback->description = $request->description;

      $Callback->save();

        Mail::send('emails.request', ['user' => $user, 'callback' => $Callback], function ($m) use ($user) {
           $m->from('requests@ringme.eu', 'Ring Me');

           $m->to("glenn.hermans@idevelopment.be", 'Glenn')->subject('Call back request!');
       });
        return back();
    }

    /**
     * Show update form for a callback.
     *
     * @param  int $id the callback id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $user = auth()->user();
        $data['item'] = Callback::find($id);

        if ($user->is('Agent') || $user->is('Manager') || $user->is('Administrator')) {
            return view('callbacks/details', $data);
        }

        return redirect()->back();
    }

    /**
     * Destroy a callback out off the system.
     *
     * @param  int $id The callback id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = auth()->user();

        if (! $user->is('Agent') || ! $user->is('Manager') || ! $user->is('Administrator')) {
            return redirect()->back();
        }

        return redirect()->back(302);
    }

}
