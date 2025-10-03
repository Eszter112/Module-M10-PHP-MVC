<?php

// o view/articles.php pour la liste.
// o view/article.php pour un seul article.
class ArticleView
{
    private $article;

    public function __construct($article)
    {

        $this->article = $article;
    }

    public function show()
    {
        echo "<h1>Article</h1>";
        return $this->article;
    }
}
