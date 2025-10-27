<?php

namespace App\Views;

use App\Models\Articles;

class ArticlesViews
{
    protected $html;
    public function show($path, array $articles)
    {

        print $this->html = include_once($path);
    }
}