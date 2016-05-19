<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class CallbackController
 * @package App\Http\Controllers
 */
class CallbackController extends Controller
{
    /**
     * Display all the callbacks.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    	return view('callbacks/list');
    }

    /**
     * Show update form for a callback.
     * 
     * @param  int $id the callback id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
    	return view('callbacks/details');
    }

}
