<?php
    class auth extends db {
        function __construct()
        {
            parent::__construct();
        }
             // signUp
    public function signUp($Name,$Email,$Password,$role) {
        // check if admin already exists
        if ($role === "admin"){
            $checkExist = $this -> connection -> prepare("SELECT count(email) as count from users");
            $checkExist -> execute();
            $countEmails = $checkExist -> fetch(PDO::FETCH_ASSOC);
            if ($countEmails["count"] === 0){
                try {
                    // Prepare and execute the insertion query
                    $result = $this->connection->prepare("INSERT INTO users (full_name, email, user_password, user_role) VALUES (?, ?, ?, ?)");
                    $result->execute([$Name,$Email,$Password,$role]);     
                   
                } catch (PDOException $e) {
                    echo "failed to sign up";
                }
                return true;
            } else {
                return false;
            }
        } else { // if the role isnt admin create normal acccount
            $checkExist = $this -> connection -> prepare("SELECT count(email) as count from users where email = ?");
            $checkExist -> execute([$Email]);
            $countEmails = $checkExist -> fetch(PDO::FETCH_ASSOC);
            if ($countEmails["count"] === 0){
                try {
                    // Prepare and execute the insertion query
                    $result = $this->connection->prepare("INSERT INTO users (full_name, email, user_password, user_role) VALUES (?, ?, ?, ?)");
                    $result->execute([$Name,$Email,$Password,$role]);     
                   
                } catch (PDOException $e) {
                    echo "failed to sign up";
                }
                return true;
            } else {
                return false;
            }
        }
       
    }
    }
?>