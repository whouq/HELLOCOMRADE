<?php
namespace App\Models;

class Articles
{
    protected array $articles;

    public function __construct()
    {
        $this->articles = [
            ['name'=>'name1', 'content'=>'content1', 'description'=>'description1', 'author'=>'author1'],
            ['name'=>'name2', 'content'=>'content2', 'description'=>'description2', 'author'=>'author2'],
            ['name'=>'name3', 'content'=>'content3', 'description'=>'description3', 'author'=>'author3'],
            ['name'=>'name4', 'content'=>'content4', 'description'=>'description4', 'author'=>'author4'],
        ];
    }
    public function getArticles()
    {
        return $this->articles;
    }
}