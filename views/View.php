<?php


//la class View recoit le modele
// elle utilse le message du Model pour creee du HTML
// elle n'est change pas les donnees=> elle montre uniqmeaunt 
class View {
    private $model;

    public function __construct ($model){  // permetre a la view d'acceder au message de modele 
        $this->model = $model; 
    }

    public function output(){
        return "<h1>" . $this->model->message . "</h1>"; 
    }
}