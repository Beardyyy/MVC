<?php

class Login extends Controller{


    public static function check(){

        if(isset($_POST['email']) && isset($_POST['password'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($email != "" && $password != "") {

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