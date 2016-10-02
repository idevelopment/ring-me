<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SegmentsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('lang');
  }

  public function index()
  {
    return view('segments.index');
  }

  public function store()
  {
    return view('segments.register');
  }

  public function edit()
  {
    return view('segments.edit');
  }

  public function update()
  {

  }
}
