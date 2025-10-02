<?php

// 
class Controller {
    private $model;
    
    public function __construct ($model){ //le constructeur recoit un objet Model et le stocke dans $this->model
        $this->model = $model;              // cela permet au controleur pour d'acceder au message du modele 
    }

    public function changeMessage(){
        $this->model->message = "Message mis a jour grace au Controller!";
    }

    public function reinitialiserMessage(){
        $this->model->message = "message par default";
    }
}