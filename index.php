<?php
require_once "models/Model.php";
require_once "views/View.php";
require_once "controllers/Controller.php";
require_once "views/View2.php";

$model = new Model();
$controller = new Controller($model);
$view = new View($model);

if (isset($_GET['action']) && $_GET['action'] == "update") {  
    $controller->changeMessage(); //L’utilisateur clique sur un lien pour mettre a jour le message
}
echo $view->output();
echo '<a href="?action=update">Changer le message</a>'."<br>"; 



//second button 
if(isset($_GET['action']) && $_GET['action'] == "update"){
    $controller->reinitialiserMessage();
}
echo '<a href="?action=update">Réinitialiser</a>';

$view2= new ViewSeconde($model);
echo $view2->output();