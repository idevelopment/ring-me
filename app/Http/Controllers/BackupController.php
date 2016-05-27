<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BackupController extends Controller
{
	    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }
    
    /**
     * Get the backup page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    	return view('settings.backups');
    }
}
