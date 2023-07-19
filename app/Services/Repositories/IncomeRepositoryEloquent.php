<?php

namespace App\Services\Repositories;

use App\Contracts\Repositories\IncomeRepository;
use App\Models\Income;

/**
 * Class IncomeRepositoryEloquent.
 *
 * @package namespace App\Services\Repositories;
 */
class IncomeRepositoryEloquent extends AbstractRepository implements IncomeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return Income::class;
    }

}
