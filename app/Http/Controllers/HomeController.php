<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Bouncer;
use Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = auth()->user();

      if(Bouncer::is($user)->a('Administrator', 'Manager')) {
          return redirect()->route('dashboard.administration');
      }

      elseif(Bouncer::is($user)->an('Agent')) {
        return redirect()->route('dashboard.agent');
      }

      elseif(Bouncer::is($user)->an('Customer')) {
          return redirect('/');
      }
        return redirect('/');
    }

    /**
     * Show the administration dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function administration()
    {

      if (\Auth::check()) {
    // The user is logged in...

  $data["chart"] = Charts::create('percentage', 'justgage')
  ->setTitle('')
  ->setElementLabel('Open requests')
  ->setValues([1,0,2])
  ->setResponsive(false)
  ->setHeight(250)
  ->setWidth(0);

  $data["overdue"] = Charts::create('percentage', 'justgage')
  ->setElementLabel('Overdue requests')
  ->setValues([65,0,100])
  ->setResponsive(false)
  ->setHeight(300)
  ->setWidth(0);

  $data["assigned"] = Charts::create('percentage', 'justgage')
->setTitle('')
->setElementLabel('Tasks assigned')
->setValues([10, 0, 2])
->setResponsive(false)
->setHeight(250)
->setWidth(0);

        return view('home/administration', $data);

        }
    }

    /**
     * Show the administration dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function agent()
    {

      if (\Auth::check()) {
    // The user is logged in...


        return view('home/agent');

        }
    }

}
