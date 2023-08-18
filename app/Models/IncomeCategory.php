<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class IncomeCategory.
 *
 * @package namespace App\Models;
 */
class IncomeCategory extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * @var string
     */
    protected $table = 'income_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
