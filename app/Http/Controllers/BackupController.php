<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Config;

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

        // Config data
        $data['StoreAllBackups']   = Config::get('laravel-backup.cleanup.defaultStrategy.keepAllBackupsForDays');
        $data['KeepDailyBackups']  = Config::get('laravel-backup.cleanup.defaultStrategy.keepDailyBackupsForDays');
        $data['WeeklyBackups']     = Config::get('laravel-backup.cleanup.defaultStrategy.keepWeeklyBackupsForWeeks');
        $data['MonthlyBackups']    = Config::get('laravel-backup.cleanup.defaultStrategy.keepMonthlyBackupsForMonths');
        $data['KeepYearlyBackups'] = Config::get('laravel-backup.cleanup.defaultStrategy.keepYearlyBackupsForYears');

    	return view('settings.backups', $data);
    }
}
