<?php
    abstract class ConnectionDB
    {

        protected function getConnectionDB()
        {
            try {
                $pdo = new PDO ("mysql:host=localhost;dbname=teste_crud;charset=utf8","root","");
                return $pdo;
            } catch (PDOException $ex) {
                return $ex->getMessage();
            }
        }



    }
?>