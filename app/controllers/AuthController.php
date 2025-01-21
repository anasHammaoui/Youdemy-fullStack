<?php
    class authController extends BaseController {
        private $authModel;

        function __construct()  {
            $this -> authModel = new auth();
        }
        // render signIn
        function renderSignIn(){
            $this -> render("/auth/login");
        }
        // render signUp
        function renderSignUp(){
            $this -> render("/auth/signUp");
        }
            // VALIDATION
    function validateInputs($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
    // sign up
    public function signUp(){

        if (isset($_POST["signUp"])){
          $Name = $this -> validateInputs($_POST["fName"]);
          $Email = $this -> validateInputs($_POST["email"]) ;
          $Password = password_hash($_POST["password"],PASSWORD_DEFAULT);
          $role = $_POST["role"];
        // check if signed up successfully 
          if ($this -> authModel -> signUp($Name,$Email,$Password,$role)){
            header("location:/signin");
        } else {
            echo "failed to sign up: ";
            echo "<a href='/signup'>Try again</a>";
          }
    
       }
     }
    //  login function
    public function login(){
        if (isset($_POST["login"])){
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            if ($this -> authModel -> checkEmailLogin($email)){
                if (password_verify($pass,$this -> authModel -> checkPassLogin($email))){
                    $userData = $this -> authModel -> getAllLogedData($email,$pass);
                    $_SESSION["full_name"] = $userData["full_name"];
                    $_SESSION["user_id"] = $userData["user_id"];
                    $_SESSION["user_role"] = $userData["user_role"];
                    if ($userData["user_role"] === "student"){
                       header("location:/");
                    } elseif ($userData["user_role"] === "teacher"){
                        header("location:/teacher");
                    } elseif ($userData["user_role"] === "admin"){
                        header("location:/admin");
                    }
                } else {
                    echo "invalid password: ";
                    echo "<a href='/signin'>Try again</a>"; 
                }
            } else {
                echo "invalid email or inaccepted user : ";
                echo "<a href='/signin'>Try again</a>";
            }

        }
    }
    // log out function
    function logOut(){
        session_destroy();
        $this -> render("auth/login"); 
    }
    }
?>