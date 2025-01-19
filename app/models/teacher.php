<?php
    class teacher extends db{
        function getCategories(){
            $getCats = $this -> connection -> prepare("SELECT * from categories");
            $getCats -> execute();
            return $getCats -> fetchAll();
        }
        function getTags(){
            $getTags = $this -> connection -> prepare("SELECT * from tags");
            $getTags -> execute();
            return $getTags -> fetchAll();
        }
    }
?>