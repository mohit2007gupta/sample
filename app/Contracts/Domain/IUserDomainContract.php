<?php

namespace App\Contracts\Domain;

interface IUserDomainContract
{
    public function getUser($id);

    public function getUserWithLevels($id);

    public function changeLevel($userId, $newLevelId);

    public function getIdsFromEmails($emailList);

    public function getAdministrators();

    public function getModerators();

    public function getEditors();

    public function getAuthors();

    public function getUserContributions($id);
    
    public function getUserArticles($id);

}
