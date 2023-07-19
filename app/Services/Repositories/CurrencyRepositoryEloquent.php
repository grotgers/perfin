<?php

namespace App\Services\Repositories;

use App\Contracts\Repositories\CurrencyRepository;
use App\Models\Currency;

/**
 * Class CurrencyRepositoryEloquent.
 *
 * @package namespace App\Services\Repositories;
 */
class CurrencyRepositoryEloquent extends AbstractRepository implements CurrencyRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return Currency::class;
    }

}
