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
            // doc pagination
            $docPage = isset($_GET["docPage"]) ? (int)$_GET["docPage"] : 1;
            $docoffset = ($docPage - 1) * 2;
            // vid pagination
            $vidPage = isset($_GET["vidPage"]) ? (int)$_GET["vidPage"] : 1;
            $vidoffset = ($vidPage - 1) * 2;
            // search
            $search = (isset($_GET["search"]) && !empty($_GET["search"])  )? $_GET["search"] : NULL;
            // render data
            $docCourses = $this -> docCoursesModel -> allCourses((int)$docoffset,$search);
            $vidCourses = $this -> vidCoursesModel -> allCourses((int)$vidoffset,$search);
            $myEnrolls = [];
            if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "student") {
                $myEnrolls = $this -> enrollements -> getMyEnrolls((int)$_SESSION["user_id"]);
            }
            // var_dump($docCourses,$vidCourses);
            $this -> render("home",["docCourses"=> $docCourses,"vidCourses"=> $vidCourses,"docPage"=>$docPage,"vidPage"=>$vidPage,"myEnrolls"=>$myEnrolls]);
        }
    }
?>