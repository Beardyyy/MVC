<?php

require_once 'Routes.php';

function __autoload($class){

    if(file_exists('./classes/'. $class .'.php')){

        include './classes/'. $class .'.php';
    }else if(file_exists('./Controllers/'. $class .'.php')){

        include './Controllers/'. $class .'.php';
    }
}

spl_autoload_register('__autoload');



?>



