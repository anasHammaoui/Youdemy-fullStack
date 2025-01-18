<?php
    class coursesCont extends BaseController{
        private $docCoursesModel;
        private $vidCoursesModel;
        private $enrollements;
        public function __construct() {
            $this -> docCoursesModel = new docCourse();
            $this -> vidCoursesModel = new vidCourse();
            $this -> enrollements = new Student();
        }
        public function allCourses(){
            $docPage = isset($_GET["docPage"]) ? (int)$_GET["docPage"] : 1;
            $docoffset = ($docPage - 1) * 2;
            $vidPage = isset($_GET["vidPage"]) ? (int)$_GET["vidPage"] : 1;
            $vidoffset = ($vidPage - 1) * 2;
            $docCourses = $this -> docCoursesModel -> allCourses((int)$docoffset);
            $vidCourses = $this -> vidCoursesModel -> allCourses((int)$vidoffset);
            $myEnrolls = [];
            if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "student") {
                $myEnrolls = $this -> enrollements -> getMyEnrolls((int)$_SESSION["user_id"]);
            }
            // var_dump($docCourses,$vidCourses);
            $this -> render("home",["docCourses"=> $docCourses,"vidCourses"=> $vidCourses,"docPage"=>$docPage,"vidPage"=>$vidPage,"myEnrolls"=>$myEnrolls]);
        }
    }
?>