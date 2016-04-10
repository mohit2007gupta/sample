<?php

namespace App\Contracts\Rest;

interface IArticleRestContract
{
    public function getArticle($id);
}