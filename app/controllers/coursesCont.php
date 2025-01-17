<?php
    class coursesCont extends BaseController{
        private $docCoursesModel;
        private $vidCoursesModel;
        public function __construct() {
            $this -> docCoursesModel = new docCourse();
            $this -> vidCoursesModel = new vidCourse();
        }
        public function allCourses(){
            $docPage = isset($_GET["docPage"]) ? (int)$_GET["docPage"] : 1;
            $docoffset = ($docPage - 1) * 2;
            $vidPage = isset($_GET["vidPage"]) ? (int)$_GET["vidPage"] : 1;
            $vidoffset = ($vidPage - 1) * 2;
            $docCourses = $this -> docCoursesModel -> allCourses((int)$docoffset);
            $vidCourses = $this -> vidCoursesModel -> allCourses((int)$vidoffset);
            // var_dump($docCourses,$vidCourses);
            $this -> render("home",["docCourses"=> $docCourses,"vidCourses"=> $vidCourses,"docPage"=>$docPage,"vidPage"=>$vidPage]);
        }
    }
?>