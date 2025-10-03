<?php

require "models/ArticleModel.php";
require "controllers/ArticleController.php";
require "views/ArticlesView.php";
require "views/ArticleView.php";


$model = new ArticleModel();
$controller = new ArticleController($model);
$view = new ArticlesView($model->getArticles());
$id = new ArticleView($model->getArticle(2));




echo $view->index();
echo $id->show();
echo $view->inputArticle();
$view->supprimerArticle();
$controller->delete($model);
// $action = $_GET['action'] ?? 'index';
// $id = $_GET['id'] ?? null;
// $controller->$action($id);
