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
        return $this->belongsTo('App\Customer', 'customer');
    }

    /**
     * Callback -> Departments relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function departments()
    {
        return $this->belongsTo('App\Departments', 'type');
    }


    /**
     * Callback -> User Relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsTo('App\User', 'agent_id');
    }
}
