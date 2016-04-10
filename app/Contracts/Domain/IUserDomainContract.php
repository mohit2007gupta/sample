<?php

namespace App\Contracts\Domain;

interface IUserDomainContract
{
    public function getUser($id);

    public function getUserWithLevels($id);

    public function changeLevel($userId, $newLevelId);

    public function getIdsFromEmails($emailList);

}
