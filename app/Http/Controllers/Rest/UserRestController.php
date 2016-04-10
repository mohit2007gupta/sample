<?php

namespace App\Http\Controllers\Rest;

use App\Contracts\Rest\IUserRestContract;
use App\Http\Controllers\Controller;
use App\Templates\SCResponse;

class UserRestController extends Controller
{
    protected $userRestService;

    public function __construct(IUserRestContract $userRestService)
    {
        $this->userRestService = $userRestService;
    }

    public function getUser($id)
    {
        return $this->userRestService->getUser($id);
    }

    public function getCurrentUser()
    {
        $user = $this->userRestService->getCurrentUser();
        if ($user == null) {
            return response()->json(SCResponse::getErrorResponse('Unauthorised', []));
        }
        return response()->json(SCResponse::getSuccessResponse('User Details', $user));
    }

    public function makeAdmin($id)
    {
        $user = $this->userRestService->makeAdmin($id);
        if ($user == null) {
            return response()->json(SCResponse::getErrorResponse('Unauthorised', []));
        }
        return response()->json(SCResponse::getSuccessResponse('User Level Changed', $user));
    }

    public function removeAdmin($id)
    {
        $user = $this->userRestService->removeAdmin($id);
        if ($user == null) {
            return response()->json(SCResponse::getErrorResponse('Unauthorised', []));
        }
        return response()->json(SCResponse::getSuccessResponse('User Level Changed', $user));
    }

    public function makeModerator($id)
    {
        $user = $this->userRestService->makeModerator($id);
        if ($user == null) {
            return response()->json(SCResponse::getErrorResponse('Unauthorised', []));
        }
        return response()->json(SCResponse::getSuccessResponse('User Level Changed', $user));
    }

    public function removeModerator($id)
    {
        $user = $this->userRestService->removeModerator($id);
        if ($user == null) {
            return response()->json(SCResponse::getErrorResponse('Unauthorised', []));
        }
        return response()->json(SCResponse::getSuccessResponse('User Level Changed', $user));
    }

    public function makeEditor($id)
    {
        $user = $this->userRestService->makeEditor($id);
        if ($user == null) {
            return response()->json(SCResponse::getErrorResponse('Unauthorised', []));
        }
        return response()->json(SCResponse::getSuccessResponse('User Level Changed', $user));
    }

    public function removeEditor($id)
    {
        $user = $this->userRestService->removeEditor($id);
        if ($user == null) {
            return response()->json(SCResponse::getErrorResponse('Unauthorised', []));
        }
        return response()->json(SCResponse::getSuccessResponse('User Level Changed', $user));
    }

    public function makeAuthor($id)
    {
        $user = $this->userRestService->makeAuthor($id);
        if ($user == null) {
            return response()->json(SCResponse::getErrorResponse('Unauthorised', []));
        }
        return response()->json(SCResponse::getSuccessResponse('User Level Changed', $user));
    }

    public function removeAuthor($id)
    {
        $user = $this->userRestService->removeAuthor($id);
        if ($user == null) {
            return response()->json(SCResponse::getErrorResponse('Unauthorised', []));
        }
        return response()->json(SCResponse::getSuccessResponse('User Level Changed', $user));
    }
}