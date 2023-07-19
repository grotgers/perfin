<?php

namespace App\Services\Repositories;

use App\Contracts\Repositories\IncomeCategoryRepository;
use App\Models\IncomeCategory;

/**
 * Class IncomeCategoryRepositoryEloquent.
 *
 * @package namespace App\Services\Repositories;
 */
class IncomeCategoryRepositoryEloquent extends AbstractRepository implements IncomeCategoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return IncomeCategory::class;
    }

}
