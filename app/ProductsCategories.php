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
   * Model table.
   *
   * @var string
   */
  protected $table = 'products_categories';

    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Product category relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function products()
    {
        return $this->hasMany('App\Products', 'category_id');
    }
}
