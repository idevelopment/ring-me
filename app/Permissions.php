<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'abilities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
