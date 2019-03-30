<?php

class ModelLogin extends Controller{



    public static function login($email, $password)
    {



            $query = "SELECT * FROM users WHERE email=:email AND password=:password";

            $q = self::connect()->prepare($query);
            $q->bindParam('email', $email, PDO::PARAM_STR);
            $q->bindParam('password', $password, PDO::PARAM_STR);
            $q->execute();
            $count = $q->rowCount();
            $row = $q->fetchAll();


            if($count == 1 && !empty($row)) {

                print_r($row);
                print_r($count);
                echo "Login success!!!";

            }else{

                print_r($row);
                print_r($count);
                echo "Email or password isn't correct!";
            }



    }
}


?>