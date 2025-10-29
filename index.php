<?php

use App\Controllers\ArticlesController;
use App\Models\Articles;
use App\Views\ArticlesViews;

require __DIR__ . '/vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$articles = new Articles();
$articleView = new ArticlesViews();
$articlesController = new ArticlesController($articles, $articleView);

$uri = parse_url($_SERVER['REQUEST_URI']);
switch ($uri['path']) {
    case '/':
        include_once './templates/pages/index.php';
        break;

    case '/calculator':
        include_once './templates/pages/calc.php';
        break;

    case '/articles':
        $articlesController->index();
        break;


}