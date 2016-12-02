<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Callback;
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

  $CountOpenRequests = Callback::where('status', 'open')->count();
  $data["chart"] = Charts::create('percentage', 'justgage')
  ->Title('')
  ->values([$CountOpenRequests, 0, 4])
  ->ElementLabel('Open requests')
  ->Responsive(false)
  ->Height(250)
  ->Width(0);

  $CountOverdueRequests = Callback::where('status', 'overdue')->count();
  $data["overdue"] = Charts::create('percentage', 'justgage')
  ->Title('')
  ->ElementLabel('Overdue requests')
  ->values([$CountOverdueRequests, 0 ,1])
  ->Responsive(false)
  ->Height(250)
  ->Width(0);

  $data["assigned"] = Charts::create('percentage', 'justgage')
->Title('')
->ElementLabel('Tasks assigned')
->Values([10, 0, 2])
->Responsive(false)
->Height(250)
->Width(0);

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
      $user = auth()->user();

      if (\Auth::check()) {

        $CountOpenRequests = Callback::where('status', 'open')->count();
        $data["chart"] = Charts::create('percentage', 'justgage')
        ->Title('')
        ->values([$CountOpenRequests, 0, 10])
        ->ElementLabel('Open requests')
        ->Responsive(false)
        ->Height(200)
        ->Width(0);

        $CountOverdueRequests = Callback::where('status', 'overdue')->count();
        $data["overdue"] = Charts::create('percentage', 'justgage')
        ->Title('')
        ->ElementLabel('Overdue requests')
        ->values([$CountOverdueRequests, 0 ,100])
        ->Responsive(false)
        ->Height(200)
        ->Width(0);

        $data["assigned"] = Charts::create('percentage', 'justgage')
      ->Title('')
      ->ElementLabel('Tasks assigned')
      ->values([80,0,100])
      ->Responsive(false)
      ->Height(200)
      ->Width(0);

      $data["callbacks"] = Callback::where('agent_id', $user->id)->with('users', 'customers', 'departments')->get();

        return view('home/agent', $data);

        }
    }

}
