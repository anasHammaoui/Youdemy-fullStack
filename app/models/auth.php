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
            $checkExist = $this -> connection -> prepare("SELECT count(email) as count from users where user_role = 'admin'");
            $checkExist -> execute();
            $countEmails = $checkExist -> fetch(PDO::FETCH_ASSOC);
            if ($countEmails["count"] === 0){
                    // Prepare and execute the insertion query
                    $result = $this->connection->prepare("INSERT INTO users (full_name, email, user_password, user_role, user_status) VALUES (?, ?, ?, ?, 'active')");
                    $result->execute([$Name,$Email,$Password,$role]);     
                return true;
            } else {
                return false;
            }
        } else { // if the role isnt admin create normal acccount
            $checkExist = $this -> connection -> prepare("SELECT count(email) as count from users where email = ?");
            $checkExist -> execute([$Email]);
            $countEmails = $checkExist -> fetch(PDO::FETCH_ASSOC);
            if ($countEmails["count"] === 0){
                    // Prepare and execute the insertion query
                   if ($role === "teacher") {
                    $result = $this->connection->prepare("INSERT INTO users (full_name, email, user_password, user_role, user_status) VALUES (?, ?, ?, ?, 'pending')");
                    $result->execute([$Name,$Email,$Password,$role]);
                    return true;
                   } else {
                    $result = $this->connection->prepare("INSERT INTO users (full_name, email, user_password, user_role) VALUES (?, ?, ?, ?)");
                    $result->execute([$Name,$Email,$Password,$role]);
                    return true;
                   }
            } else {
                return false;
            }
        }
       
    }
    // login function 
    function checkEmailLogin($email){
        $checkEmail = $this -> connection -> prepare("SELECT count(email) as count FROM users where email = ?");
        $checkEmail -> execute([$email]);
        $count = $checkEmail -> fetch(PDO::FETCH_ASSOC);
        return $count["count"];
    }
    function checkPassLogin($email){
        $checkEmail = $this -> connection -> prepare("SELECT user_password FROM users where email = ?");
        $checkEmail -> execute([$email]);
        $allData = $checkEmail -> fetch(PDO::FETCH_ASSOC);
        return $allData["user_password"];
    }
    function getAllLogedData($email){
        $checkEmail = $this -> connection -> prepare("SELECT * FROM users where email = ?");
        $checkEmail -> execute([$email]);
        $allData = $checkEmail -> fetch(PDO::FETCH_ASSOC);
        return $allData;
    }
    }
?>