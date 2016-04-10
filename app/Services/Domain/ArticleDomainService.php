<?php

namespace App\Services\Domain;

use App\Contracts\Domain\IArticleDomainContract;

class ArticleDomainService implements IArticleDomainContract
{
    public function getArticle($id)
    {
        return 'Test Article';
    }
}