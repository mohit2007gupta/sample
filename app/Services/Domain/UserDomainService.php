<?php

namespace App\Services\Domain;

use App\Contracts\Domain\IUserDomainContract;
use App\Models\Article;
use App\Models\Enums\SCConstants;
use App\Models\User;

class UserDomainService implements IUserDomainContract
{
    public function getUser($id)
    {
        return User::find($id);
    }

    public function getUserWithLevels($id)
    {
        return User::where('id', $id)->with('level')->first();
    }

    public function changeLevel($userId, $newLevelId)
    {
        $user = User::find($userId);
        $user->level = $newLevelId;
        $user->save();
        return $user;
    }

    public function getIdsFromEmails($emailList)
    {
        if (count($emailList) > 0)
            return User::whereIn('email', $emailList)->lists('id')->all();
        else
            return [];
    }

    public function getAdministrators()
    {
        return User::where('level', SCConstants::ADMIN)->paginate(SCConstants::PAGINATION_NUMBER);
    }

    public function getModerators()
    {
        return User::where('level', SCConstants::MODERATOR)->paginate(SCConstants::PAGINATION_NUMBER);
    }

    public function getEditors()
    {
        return User::where('level', SCConstants::EDITOR)->paginate(SCConstants::PAGINATION_NUMBER);
    }

    public function getAuthors()
    {
        return User::where('level', SCConstants::AUTHOR)->paginate(SCConstants::PAGINATION_NUMBER);
    }

    public function getUserContributions($id)
    {
        return User::where('id', $id)->with('contributedArticles.author')->first()['contributedArticles']->orderBy('created_at', 'desc')->paginate(SCConstants::PAGINATION_NUMBER);
    }

    public function getUserArticles($id)
    {
        return Article::where('author_id', $id)->orderBy('created_at', 'desc')->paginate(SCConstants::PAGINATION_NUMBER);
    }
}