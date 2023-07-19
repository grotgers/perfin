<?php

namespace App\Services\Repositories;

use App\Contracts\Repositories\EntityRepository;
use App\Models\Entity;

/**
 * Class EntityRepositoryEloquent.
 *
 * @package namespace App\Services\Repositories;
 */
class EntityRepositoryEloquent extends AbstractRepository implements EntityRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return Entity::class;
    }

}
