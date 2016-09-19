<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AssetsController extends Controller
{
  /**
   * AssetsController constructor.
   */
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('lang');
  }

  public function index()
  {
    return view('assets.index');
  }
}
