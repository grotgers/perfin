<?php

namespace App\Services\Repositories\Traits;

trait HasMassiveAction
{
    /**
     * @param array $rows
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function massiveInsert(array $rows)
    {
        $this->makeModel();

        return $this->model->insert($rows);
    }

    /**
     * @param array $attributes
     * @param array $ids
     *
     * @return boolean
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function massiveUpdate(array $attributes, array $ids)
    {
        $this->makeModel();

        return $this->model->whereIn('id', $ids)->update($attributes);
    }

    /**
     * @param array $ids
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function massiveDelete(array $ids)
    {
        $this->makeModel();

        return $this->model->whereIn('id', $ids)->delete();
    }
}
