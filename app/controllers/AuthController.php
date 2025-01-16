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
    // sign up for admin
    public function signUp(){

        if (isset($_POST["signUp"])){
          $Name = $this -> validateInputs($_POST["fName"]);
          $Email = $this -> validateInputs($_POST["email"]) ;
          $Password = password_hash($_POST["password"],PASSWORD_DEFAULT);
          $role = $_POST["role"];
        // check if signed up successfully 
          if ($this -> authModel -> signUp($Name,$Email,$Password,$role)){
            $this -> render("/auth/login");
          } else {
            echo "failed to sign up";
          }
    
       }
     }
    }
?>