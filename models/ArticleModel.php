<?php


// Page d’accueil : liste des articles.
class ArticleModel
{

    private $articles = [
        1 => "Articles 1 : Introduction a MVC",
        2 => "Articles 2 : Pourquoi separer le code?",
        3 => "Articles 3 : Premier mini projet",
        4 => "Article 4 : MVC MY LOVE"

    ];



    public function getArticles()
    {
        return $this->articles;
    }

    public function getArticle($id)
    {
        return $this->articles[$id] ?? "Article introuvable";
    }

    // public function addArticle() {
    //   
    // }

    public function deleteArticle($id)
    {
        unset($this->article[$id]);
    }
}
