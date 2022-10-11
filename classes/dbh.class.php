<?php

/* Initialize connection to the database */
class Dbh {

    protected function connect(){
        try {
            $username = "root";
            $password = "root";
            $dbh = new PDO('mysql:host=localhost;dbname=product_db', $username, $password);

            return $dbh;
        }
        catch(PDOException $e){
            print "Error!: " . $e->getMessage(). "<br/>";
            die();
        }
    }
}