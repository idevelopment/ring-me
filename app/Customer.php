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

    /**
     * Customer -> callbacks relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function callbacks()
    {
        return $this->belongsToMany('App\Callback');
    }
}
