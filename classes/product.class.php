<?php

/* The class that handles database operations */
class Product  extends Dbh{


    protected function getUser($email, $password){
        $stmt = $this->connect()->prepare('SELECT users_password FROM users WHERE users_email = ? OR  users_password = ?;');

        if(!$stmt->execute(array($email, $password))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../index.php?error=usersnotfound");
            exit();
        }

        $pwdhashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkowd = password_verify($password, $pwdhashed[0]["users_password"]);

        if($checkowd == false){
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        }
        elseif($checkowd ==true ){
            $stmt = $this->connect()->prepare('SELECT users_password FROM users WHERE users_email = ? OR  users_password = ?;');

            if(!$stmt->execute(array($email, $password))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../index.php?error=usersnotfound");
                exit();
            }


            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
             session_start();
             $_SESSION["userid"] = $user[0]["users_id"];
             $_SESSION["useruid"] = $user[0]["users_email"];

             $stmt = null;

        }


    }


}