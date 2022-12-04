<?php

class Dbh
{

    protected function connect()
    {
        try {
            $username = "root";
            $password = "root";
            $dbh = new PDO('mysql:host=localhost;dbname=esport-manager_db', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error! " . $e->getMessage() . "<br/>";
            die();
        }
    }

}

?>