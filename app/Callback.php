<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Callback extends Model
{
    /**
     * Callback -> customers relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function customers()
    {
        return $this->belongsToMany('App\Customer');
    }
}
