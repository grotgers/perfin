<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class OutcomeCategory.
 *
 * @package namespace App\Models;
 */
class OutcomeCategory extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * @var string
     */
    protected $table = 'outcome_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
