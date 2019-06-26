<?php

class Route{

    public static $validRoutes = array();

    public static function set($route, $function){

        self::$validRoutes[] = $route;

        //print_r(self::$validRoutes);

       // $routes = $_GET['url'];
       var_dump($_GET['url']);

       // explode('/', $routes);

        if($_GET['url'] == $route){

            $function->__invoke();
        }else{

            echo "Wrong adress! <br>";
        }
    }
}


?>