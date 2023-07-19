<?php

namespace App\Services\Repositories;

use App\Contracts\Repositories\OutcomeCategoryRepository;
use App\Models\OutcomeCategory;

/**
 * Class OutcomeCategoryRepositoryEloquent.
 *
 * @package namespace App\Services\Repositories;
 */
class OutcomeCategoryRepositoryEloquent extends AbstractRepository implements OutcomeCategoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return OutcomeCategory::class;
    }

}
