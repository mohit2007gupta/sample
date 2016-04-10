<?php

namespace App\Contracts\Domain;

interface IArticleDomainContract
{
    public function getArticle($id);

    public function createArticle($title, $content, $authorId, $contributors);

    public function deleteArticle($id);

    public function editArticle($id, $title, $content, $contributors);
}
