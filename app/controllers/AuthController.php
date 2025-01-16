<?php
    class authController extends BaseController {
        // render signIn
        function renderSignIn(){
            $this -> render("/auth/login");
        }
        // render signUp
        function renderSignUp(){
            $this -> render("/auth/signUp");
        }
    }
?>