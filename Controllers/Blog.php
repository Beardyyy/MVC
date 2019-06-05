<?php

class Blog extends Controller{


    public static function fetchPost(){

        $post = self::query("SELECT * FROM posts");

        return $post;

    }



    public static function onePost($p){


        $post = self::query("SELECT ".$p." FROM posts");

        return $post;

    }
}

