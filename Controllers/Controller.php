<?php

class Controller extends Database{

    public static function CreateView($viewName){

        require_once './Views/Layout.php';
        return $viewName;

    }
}


?>