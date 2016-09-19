<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Products
 * @package App
 */
class Products extends Model
{
    /**
     * Model table.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['name', 'category'];
}
