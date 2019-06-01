<?php


class CreatePost extends Controller{


    public static function create(){

        if(isset($_POST['title']) && isset($_POST['content'])) {


            $title = $_POST['title'];
            $content = $_POST['content'];


            if($title != "" && $content != "") {

                $title = stripslashes($title);
                $content = stripslashes($content);


                $title = strip_tags(trim($title));
                $content = strip_tags(trim($content));

                echo "Dovde ide i ne dalje!!!";

                //print_r(ModelCreatePost::create($title, $content));
                ModelCreatePost::create($title, $content);


                echo "Succesfuly posted!";

            } else {

                echo "You must enter all data!";
            }
        }
    }
}