<?php

class ModelCreatePost extends Controller{

    public static function create($title, $content){


        $id_user = $_SESSION['user_id'];

        $query = "INSERT INTO posts (title, content, id_user) VALUES (:title, :content, :id_user)";


        $q = self::connect()->prepare($query);
        $q->bindParam('title', $title, PDO::PARAM_STR);
        $q->bindParam('content', $content, PDO::PARAM_STR);
        $q->bindParam('id_user', $id_user, PDO::PARAM_INT);
        $q->execute();


        echo "Posted!!!";
    }
}