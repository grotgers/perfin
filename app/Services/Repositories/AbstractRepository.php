<?php

namespace App\Services\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Prettus\Repository\Eloquent\BaseRepository;

use App\Services\Repositories\Traits\{
    HasMakeModelWithCriteria,
    HasMassiveAction
};
use Prettus\Repository\Exceptions\RepositoryException;

abstract class AbstractRepository extends BaseRepository
{
    use HasMakeModelWithCriteria, HasMassiveAction;

    /**
     * @param $column
     * @param $value
     * @return mixed
     */
    public function firstBy($column, $value)
    {
        $this->applyCriteria();

        return $this->model->where($column, $value)->first();
    }

    /**
     * @param array $where
     * @param array $columns
     * @return LengthAwarePaginator|Collection|mixed|null
     * @throws RepositoryException
     */
    public function firstWhere(array $where, array $columns = ['*']): mixed
    {
        $this->applyCriteria();
        $this->applyScope();

        $this->applyConditions($where);

        $model = $this->model->first($columns);
        $this->resetModel();

        return $this->parserResult($model);
    }
}
