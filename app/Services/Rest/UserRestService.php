<?php

namespace App\Services\Rest;

use App\Contracts\Domain\IUserDomainContract;
use App\Contracts\Rest\IUserRestContract;

class UserRestService implements IUserRestContract
{
    protected $userDomainService;

    public function __construct(IUserDomainContract $userDomainService)
    {
        $this->userDomainService = $userDomainService;
    }

    public function getUser()
    {
        return $this->userDomainService->getUser();
    }
}