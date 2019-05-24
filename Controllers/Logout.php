<?php
session_start();
class Logout extends Controller{

    public static function out(){

        session_destroy();
        header("Location: /MVC-new");
    }
}

?>