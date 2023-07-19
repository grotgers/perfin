<?php

namespace App\Services\Repositories\Traits;

trait HasMakeModelWithCriteria
{
    /**
     * Make model with Criteria
     *
     * @return [type] [description]
     */
    public function makeModelWithCriteria(Array $criterias = [])
    {
        $this->makeModel();

        $this->applyCriteria();

        return $this->model;
    }
}
