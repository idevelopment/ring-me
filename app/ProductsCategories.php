<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductsCategories
 * @package App
 */
class ProductsCategories extends Model
{
    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['name'];
}
