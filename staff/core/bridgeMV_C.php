<?php 
require_once "./staff/config/db.php";
class bridgeMVC{
    public $data = array();
    function model($model){
        require_once "./staff/Models/".$model.".php";
        return new $model;
    }
    function view($view,$data){
        require_once "./staff/View/".$view.".php";
    }

}


?>