<?php

namespace App\Services\Rest;

use App\Contracts\Domain\IArticleDomainContract;
use App\Contracts\Rest\IArticleRestContract;

class ArticleRestService implements IArticleRestContract
{
    protected $articleDomainService;

    public function __construct(IArticleDomainContract $articleDomainService)
    {
        $this->articleDomainService = $articleDomainService;
    }

    public function getArticle($id)
    {
        return $this->articleDomainService->getArticle($id);
    }
}