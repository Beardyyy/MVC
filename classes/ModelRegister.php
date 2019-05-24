<?php

class ModelRegister extends Controller{

    public static function insert($username, $email, $password){


        $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";

        $q = self::connect()->prepare($query);
        $q->bindParam('username', $username, PDO::PARAM_STR);
        $q->bindParam('email', $email, PDO::PARAM_STR);
        $q->bindParam('password', $password, PDO::PARAM_STR);
        $q->execute();

        print_r($q->execute());

        echo "You are registered, please login!!!";
    }
}

?>