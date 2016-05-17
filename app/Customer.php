<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company', 'fname', 'name', 'address',
        'zipcode', 'city', 'country', 'phone',
        'mobile', 'email', 'vat'
    ];
}
