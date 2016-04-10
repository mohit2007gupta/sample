<?php

namespace App\Services\Domain;

use App\Contracts\Domain\IArticleDomainContract;
use App\Models\Article;

class ArticleDomainService implements IArticleDomainContract
{
    public function getArticle($id)
    {
        return Article::find($id);
    }

    public function createArticle($title, $content, $authorId, $contributors)
    {
        $article = new Article();
        $article->title = $title;
        $article->content = $content;
        $article->author_id = $authorId;
//        $article->contributors()->attach($contributors);
        $article->save();
        return $article->id;
    }

    public function deleteArticle($id)
    {
        $article = Article::find($id);
        if ($article != null)
            $article->delete();
    }

    public function editArticle($id, $title, $content)
    {
        $article = Article::find($id);
        if ($article != null)
        {
            $article->title = $title;
            $article->content = $content;
//        $article->contributors()->attach($contributors);
            $article->save();
            return $article->id;
        }
        return null;
    }

    public function isContributor($id, $userId)
    {
        return Article::find($id)->contributors()->where('id', $userId);
    }
}