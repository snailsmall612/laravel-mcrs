<?php
namespace App\Services;

use App\Repositories\ArticleRepository;

class ArticleService
{
    private $articleRepo;

    
    public function __construct(ArticleRepository $articleRepo)
    {
        $this->articleRepo = $articleRepo;
    }

    public function get()
    {
        
        $articles = $this->articleRepo->get(); //透過repository取資料

        /*
            這邊可能有商業邏輯
            ...
            ...
        */

        return $articles; 
    }
}