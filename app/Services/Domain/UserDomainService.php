<?php

namespace App\Services\Domain;

use App\Contracts\Domain\IUserDomainContract;

class UserDomainService implements IUserDomainContract
{
    public function getUser()
    {
        return 'Test';
    }
}