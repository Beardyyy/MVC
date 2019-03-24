<?php

class Register extends Controller{

    public static function insert($username, $email, $password){

        $query = "INSERT INTO users (username, email, password) VALUES ('". $username ."', '". $email ."', '". $password ."')";

        $q = self::connect()->prepare($query);
        $q->execute();

        echo "Radi!!!";
    }
}

?>