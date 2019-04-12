<?php

class Register extends Controller{



    public static function check(){



        if(isset($_POST['submit'])) {



            if ($_POST['username'] != "" && $_POST['email'] != "" && $_POST['password'] != "") {

                $username = stripslashes($_POST['username']);
                    $email = stripslashes($_POST['email']);
                        $password = stripslashes($_POST['password']);

                $username = strip_tags(trim($username));
                    $email = strip_tags(trim($email));
                        $password = strip_tags(trim($password));

                ModelRegister::insert($username, $email, $password);

                echo "Succesfuly registered!";

            } else {

                echo "You must enter all data!";
            }
        }
    }


}

?>