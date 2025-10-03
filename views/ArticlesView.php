<?php


class ArticlesView
{
    private $articles;

    public function __construct($articles)
    {
        $this->articles = $articles;
    }

    public function index()
    {
        echo "<h1>Liste des articles</h1>";
        foreach ($this->articles as $id => $value) {
            echo "<p><a href='?action=show&id=$id'>$value</a></p>";
        }
    }


    public function inputArticle()
    {
        echo "<h3>Ajouter un nouvel article</h3>";
        echo "<input type='text' action='action=add'><br>";
        echo "<input type='submit' value='Ajouter'>";
    }

    public function supprimerArticle()
    {
        echo "<h3>Supprimer un article</h3>";
        echo "<input type='text'><br>";
        echo "<input type='submit' value='Supprimer'>";
    }
}
