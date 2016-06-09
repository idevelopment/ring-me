<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    /**
     * The mass-assign fields.
     *
     * @var array
     */
    protected $fillable = ['name', 'manager'];

    /**
     * Department -> managers relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function managers()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Department -> users relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
