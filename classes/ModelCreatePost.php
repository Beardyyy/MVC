<?php

class ModelCreatePost extends Controller{

    public static function create($title, $content){


        $query = "INSERT INTO posts (title, content) VALUES (:title, :content)";

        $q = self::connect()->prepare($query);
        $q->bindParam('username', $title, PDO::PARAM_STR);
        $q->bindParam('email', $content, PDO::PARAM_STR);
        $q->execute();

        print_r($q->execute());
        print_r($q);
        echo "Posted!!!";
    }
}