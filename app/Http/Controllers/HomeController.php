<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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

        return view('home', $data);

        }
        else{
        redirect("/");
        }
    }
}
