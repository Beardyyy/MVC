<?php

class Register extends Controller{



    public static function check(){



        //if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {


            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if($_POST['username'] != "" && $_POST['email'] != "" && $_POST['password'] != "") {

                $username = stripslashes($username);
                    $email = stripslashes($email);
                        $password = stripslashes($password);

                $username = strip_tags(trim($username));
                    $email = strip_tags(trim($email));
                        $password = strip_tags(trim($password));

               // print_r(ModelRegister::insert($username, $email, $password));
                ModelRegister::insert($username, $email, $password);


                echo "Succesfuly registered!";

            } else {

                echo "You must enter all data!";
            }
       // }

       // echo "Some of fields are not set!";
    }


}

?>