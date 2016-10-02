<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BackupSettingValidator extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'keepAllBackupsForDaysAll'   => 'required|integer',
            'keepAllBackupsForDays'      => 'required|integer',
            'keepWeeklyBackupsForWeeks'  => 'required|integer',
            'keepMonthlyBackupsForWeeks' => 'required|integer',
            'keepAllBackupsYearly'       => 'required|integer',
        ];
    }
}
