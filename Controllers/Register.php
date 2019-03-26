<?php

class Register extends Controller{

    public static function insert($username, $email, $password){

        $username = stripslashes($username);
        $email = stripslashes($email);
        $password = stripslashes($password);

        $username = strip_tags(trim($username));
        $email = strip_tags(trim($email));
        $password = strip_tags(trim($password));

        $query = "INSERT INTO users (username, email, password) VALUES ('". $username ."', '". $email ."', '". $password ."')";

        $q = self::connect()->prepare($query);
        $q->execute();

        echo "Radi!!!";
    }
}

?>