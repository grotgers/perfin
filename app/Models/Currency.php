<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Currency.
 *
 * @package namespace App\Models;
 */
class Currency extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * @var string
     */
    protected $table = 'currency';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'symbol',
        "symbol_native",
        "decimal_digits",
        "rounding",
        "code",
        "name_plural",
    ];

}
