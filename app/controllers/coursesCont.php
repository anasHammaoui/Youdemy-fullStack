<?php
    class coursesCont extends BaseController{
        private $docCoursesModel;
        private $vidCoursesModel;
        public function __construct() {
            $this -> docCoursesModel = new docCourse();
            $this -> vidCoursesModel = new vidCourse();
        }
        public function allCourses(){
            $docCourses = $this -> docCoursesModel -> allCourses();
            $vidCourses = $this -> vidCoursesModel -> allCourses();
            $allCourses = array_push($docCourses,$vidCourses);
            var_dump($vidCourses);die();
            // var_dump($docCourses,$vidCourses);
            $this -> render("visitor/visitor",["allCourses"=> $allCourses]);
        }
    }
?>