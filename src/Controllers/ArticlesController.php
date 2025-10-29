<?php

namespace App\Controllers;

use App\Models\Articles;
use App\Views\ArticlesViews;

class ArticlesController
{
    protected Articles $articles;
    protected ArticlesViews $articleView;
    public function __construct(Articles $articles, ArticlesViews $articleView)
    {
        $this->articles = $articles;
        $this->articleView = $articleView;
    }
    public function index()
    {
        $articles = $this->articles->getArticles();
        $path = TEMPLATES_PATH.'/pages/articles.php';
        $this->articleView->show($path, $articles);
    }

}