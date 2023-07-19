<?php

namespace App\Services\Repositories;

use App\Contracts\Repositories\CurrencyDataRepository;
use App\Models\CurrencyData;

/**
 * Class CurrencyDataRepositoryEloquent.
 *
 * @package namespace App\Services\Repositories;
 */
class CurrencyDataRepositoryEloquent extends AbstractRepository implements CurrencyDataRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return CurrencyData::class;
    }
}
