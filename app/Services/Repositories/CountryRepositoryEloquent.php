<?php

namespace App\Services\Repositories;

use App\Contracts\Repositories\CountryRepository;
use App\Models\Country;

/**
 * Class CountryRepositoryEloquent.
 *
 * @package namespace App\Services\Repositories;
 */
class CountryRepositoryEloquent extends AbstractRepository implements CountryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return Country::class;
    }

}
