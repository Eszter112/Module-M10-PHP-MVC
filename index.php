<?php
require_once "models/Model.php";
require_once "views/View.php";
require_once "controllers/Controller.php";
require_once "views/View2.php";

$model = new Model(); //on creer un objet model, il contient le message a afficher ou a modifier
$controller = new Controller($model); //la conntroller recoit le $model pour changer le message
$view = new View($model); //la view aussi recoit le $model pour afficher le message 

// on met ($model) pour donner le MODELE a la VIEW et le CONTROLLER
// cela permete de travailler sur le meme message
// c'est une regle du modele MVC: unseul modele, plusieurs chose


if (isset($_GET['action']) && $_GET['action'] == "update") {  // si url contient ?action=update 
    $controller->changeMessage(); //L’utilisateur clique sur un lien pour mettre a jour le message
}


echo $view->output(); //




//reset
if(isset($_GET['action']) && $_GET['action'] == "reset"){ //ha szerepel az url-ben a reset szo
    $controller->reinitialiserMessage();
}

// majuscules
if(isset($_GET['action']) && $_GET['action'] == "majuscules"){  //ha szerepel az url-ben a majuscules szo
    $controller->majuscules();
}




echo '<a href="?action=update">Changer le message</a>'."<br>";  //on affiche un lien, si user click ,le message sera mis a jour
echo '<a href="?action=reset">Réinitialiser</a>';
echo '<a href="?action=majuscules">Mettre le message en majuscules</a>';


$view2= new ViewSeconde($model);  
echo $view2->output();




