<?php

namespace App\Services\Repositories;

use App\Contracts\Repositories\OutcomeRepository;
use App\Models\Outcome;

/**
 * Class OutcomeRepositoryEloquent.
 *
 * @package namespace App\Services\Repositories;
 */
class OutcomeRepositoryEloquent extends AbstractRepository implements OutcomeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return Outcome::class;
    }

}
