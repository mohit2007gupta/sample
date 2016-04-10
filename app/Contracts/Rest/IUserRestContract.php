<?php

namespace App\Contracts\Rest;

interface IUserRestContract
{
    public function getCurrentUser();

    public function getUser($id);

    public function makeAdmin($id);

    public function removeAdmin($id);

    public function makeModerator($id);

    public function removeModerator($id);

    public function makeEditor($id);

    public function removeEditor($id);

    public function makeAuthor($id);

    public function removeAuthor($id);

    public function getModerators();

    public function getAuthors();

    public function getEditors();

    public function getAdministrators();

    public function getCurrentUserContributions();
    
    public function getCurrentUserArticles();
    
    public function getUserArticles($id);
}