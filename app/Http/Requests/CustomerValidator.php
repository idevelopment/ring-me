<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class CustomerValidator
 * @package App\Http\Requests
 */
class CustomerValidator extends Request
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
            'company' => 'required',
            'fname'   => 'required',
            'name'    => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'city'    => 'required',
            'country' => 'required',
            'phone'   => 'required',
            'email'   => 'required|email',
            'vat'     => 'required',
        ];
    }
}
