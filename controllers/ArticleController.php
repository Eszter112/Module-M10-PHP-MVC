<?php

// Controller :
// o index() → affiche la liste des articles.
// o show($id) → affiche un article précis.
class ArticleController
{

    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }




    public function index()
    {

        $articles = $this->model->getArticles();
        echo "<h1>Liste des articles</h1>";
        return $articles;
    }


    public function show($id)
    {
        $id = $this->model->getArticle($id);
    }

    public function delete() {}
}
