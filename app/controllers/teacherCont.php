<?php
    class teacherCont extends authController{
        private $teacherModel;
        public function __construct(){
            $this -> teacherModel = new teacher();
        }
        public function dashboard(){
            if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "teacher" ){
                $cats = $this -> teacherModel -> getCategories();
            $tags = $this -> teacherModel -> getTags();
            $teacherCourses = $this -> teacherModel -> teacherCourses((int)$_SESSION["user_id"]);
            $totalCourses =  $this -> teacherModel -> totalTeacherCourses((int)$_SESSION["user_id"]);
            $this ->  render("instructor/teacherDash", ["cats"=>$cats, "tags" => $tags, "courses" => $teacherCourses, "total" => $totalCourses]);
            }
        }
    // enrollement requests
    function requests(){
        if(isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "teacher"){
            $requests = $this->teacherModel->getRequests((int)$_SESSION["user_id"]);
            $enrolled = $this->teacherModel->getEnrolled((int)$_SESSION["user_id"]);
            $this -> render("instructor/courseStudents",["requests"=>$requests, "enrollements"=> $enrolled]);
        } else {
            echo "please login teacher";
            echo "<a href='signin'>Login</a>";
        }
    }
    // accept enrollement
    function acceptEnroll(){
        if ($_SESSION["user_role"] === "teacher"){
            // accept enrollement
            if($this -> teacherModel -> acceptEnroll((int)$_GET["id"])){
                header("location:/courseStudents");
                exit();
            } else {
                echo "failed to accept";
                echo "<a href='teacher'>go back</a>";
            }
        }
    }
    // decline enrollement
    function declineEnroll(){
        if ($_SESSION["user_role"] === "teacher"){
            // accept enrollement
            if($this -> teacherModel -> declineEnroll((int)$_GET["id"])){
                header("location:/courseStudents");
                exit();
            } else {
                echo "failed to decline";
                echo "<a href='teacher'>go back</a>";
            }
        }
    }
    }
?>