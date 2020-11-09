<?php
namespace App\Repositories;

use App\Models\Article;

class ArticleRepository
{
    private $article;

    
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function get()
    {
        return $articles = $this->article::all();
    }
}