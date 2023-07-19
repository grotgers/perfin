<?php

namespace App\Services\Repositories;

use App\Contracts\Repositories\AccountRepository;
use App\Models\Account;

/**
 * Class AccountRepositoryEloquent.
 *
 * @package namespace App\Services\Repositories;
 */
class AccountRepositoryEloquent extends AbstractRepository implements AccountRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return Account::class;
    }

}
