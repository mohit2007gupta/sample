<?php

namespace App\Services\Rest;

use App\Contracts\Domain\IUserDomainContract;
use App\Contracts\Rest\IUserRestContract;
use App\Models\Enums\SCConstants;
use Illuminate\Support\Facades\Auth;

class UserRestService implements IUserRestContract
{
    protected $userDomainService;

    public function __construct(IUserDomainContract $userDomainService)
    {
        $this->userDomainService = $userDomainService;
    }

    public function getUser($id)
    {
        return $this->userDomainService->getUser($id);
    }
    public function makeAdmin($id)
    {
        $user = Auth::user();
        if ($user->level()->can_grant_revoke_admin_privilege)
        {
            return $this->userDomainService->changeLevel($id, SCConstants::ADMIN);
        }
        return null;
    }
    public function removeAdmin($id)
    {
        $user = Auth::user();
        if ($user->level()->can_grant_revoke_admin_privilege)
        {
            return $this->userDomainService->changeLevel($id, SCConstants::REGULAR);
        }
        return null;
    }
    public function makeModerator($id)
    {
        $user = Auth::user();
        if ($user->level()->can_grant_revoke_moderator_privilege and $user->level()->id >= $this->getUser($id)->id)
        {
            return $this->userDomainService->changeLevel($id, SCConstants::MODERATOR);
        }
        return null;
    }
    public function removeModerator($id)
    {
        $user = Auth::user();
        if ($user->level()->can_grant_revoke_moderator_privilege and $user->level()->id >= $this->getUser($id)->id) {
            return $this->userDomainService->changeLevel($id, SCConstants::REGULAR);
        }
        return null;
    }
    public function makeEditor($id)
    {
        $user = Auth::user();
        if ($user->level()->can_grant_revoke_editor_privilege and $user->level()->id >= $this->getUser($id)->id)
        {
            return $this->userDomainService->changeLevel($id, SCConstants::EDITOR);
        }
        return null;
    }
    public function removeEditor($id)
    {
        $user = Auth::user();
        if ($user->level()->can_grant_revoke_editor_privilege and $user->level()->id >= $this->getUser($id)->id) {
            return $this->userDomainService->changeLevel($id, SCConstants::REGULAR);
        }
        return null;
    }
    public function makeAuthor($id)
    {
        $user = Auth::user();
        if ($user->level()->can_grant_revoke_author_privilege and $user->level()->id >= $this->getUser($id)->id)
        {
            return $this->userDomainService->changeLevel($id, SCConstants::AUTHOR);
        }
        return null;
    }
    public function removeAuthor($id)
    {
        $user = Auth::user();
        if ($user->level()->can_grant_revoke_author_privilege and $user->level()->id >= $this->getUser($id)->id) {
            return $this->userDomainService->changeLevel($id, SCConstants::REGULAR);
        }
        return null;
    }
}