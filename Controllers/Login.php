<?php

class Login extends Controller{


    public static function check(){

        if($_POST['submit']) {

            if ($_POST['email'] != "" && $_POST['password'] != "") {

                $email = stripslashes($_POST['email']);
                $password = stripslashes($_POST['password']);

                $email = strip_tags(trim($email));
                $password = strip_tags(trim($password));

                ModelLogin::login($email, $password);

            } else {

                echo "You must enter all required data!";
            }
        }
    }
}


?>