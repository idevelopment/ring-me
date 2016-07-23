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

    /**
     * Store the backup config.
     *
     * @url   POST: /settings/backups
     * @param  Requests\BackupSettingValidator $input
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeBackup(Requests\BackupSettingValidator $input)
    {
        $config = new \Larapack\ConfigWriter\Repository('laravel-backup');
        $config->set('cleanup.defaultStrategy.keepAllBackupsForDays',       $input->keepAllBackupsForDaysAll);
        $config->set('cleanup.defaultStrategy.keepDailyBackupsForDays',     $input->keepAllBackupsForDays);
        $config->set('cleanup.defaultStrategy.keepWeeklyBackupsForWeeks',   $input->keepWeeklyBackupsForWeeks);
        $config->set('cleanup.defaultStrategy.keepMonthlyBackupsForMonths', $input->keepMonthlyBackupsForWeeks);
        $config->set('cleanup.defaultStrategy.keepYearlyBackupsForYears',   $input->keepAllBackupsYearly);
        $config->save();

        if ($config) {
            sleep(3);
            session()->flash('message', 'The backup settings has been updated.');
            session()->flash('class', 'alert-success');
        } else {
            session()->flash('message', 'The backup settings could not be updated.');
            session()->flash('class', 'alert-danger');
        }

        return redirect()->back();
    }
}
