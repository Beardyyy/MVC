<?php

class Controller extends Database{



    public static function CreateView($viewName, $param = []){

        require_once './Views/Layout.php';
        return $viewName;
        return $param;
    }



}


