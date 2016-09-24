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

    /**
     * Callback -> Departments relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function departments()
    {
        return $this->belongsToMany('App\Departments');
    }


    /**
     * Callback -> User Relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
