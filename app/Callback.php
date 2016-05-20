<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Callback extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function customers()
    {
        return $this->belongsToMany('App\Customer');
    }
}
