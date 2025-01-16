<?php
    class db {
        protected $connection;
        function __construct(){
            try {
                $this -> connection = new PDO("mysql:dbname=youdemy;host =localhost", "root","");
            } catch (PDOException){
                echo "error to connect database";
            }
        }
    }
?>