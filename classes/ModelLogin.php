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

                $username = $row[0][1];
                echo " you are logged in succesfuly!" . print_r($username);

                $_SESSION['user_id'] = $row[0]['id'];
                $_SESSION['name'] = $row[0]['username'];
                //header("Location: /MVC-new");
                //print_r($_SESSION);

            }else{

                echo "Email or password isn't correct!";
            }



    }
}


?>