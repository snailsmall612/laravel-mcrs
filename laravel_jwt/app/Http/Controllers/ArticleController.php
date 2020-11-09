<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Services\ArticleService;

class ArticleController extends Controller
{   
    
    private $articleService;

    
    public function __construct(ArticleService $articleService)
    {
        $this->middleware('auth:api');
        $this->articleService = $articleService;
    }


    public function get()
    {   
        return response()->json([
            'status' => 'success',
            'articles' => $this->articleService->get()
        ]);
    }
}