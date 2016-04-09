<?php

namespace App\Http\Controllers\Rest;

use App\Contracts\Rest\IUserRestContract;
use App\Http\Controllers\Controller;

class UserRestController extends Controller
{
    protected $userRestService;

    public function __construct(IUserRestContract $userRestService)
    {
        $this->userRestService = $userRestService;
    }

    public function getUser()
    {
        return $this->userRestService->getUser();
    }
}