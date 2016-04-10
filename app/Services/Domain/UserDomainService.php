<?php

namespace App\Services\Domain;

use App\Contracts\Domain\IUserDomainContract;
use App\Models\User;

class UserDomainService implements IUserDomainContract
{
    public function getUser($id)
    {
        return User::find($id);
    }
    public function changeLevel($userId, $newLevelId)
    {
        $user = User::find($userId);
        $user->level = $newLevelId;
        $user->save();
        return $user;
    }
}