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
            $allCourses = $docCourses;
            foreach($vidCourses as $course){
                array_push($allCourses,$course);
            }
            // var_dump($docCourses,$vidCourses);
            $this -> render("visitor/visitor",["allCourses"=> $allCourses]);
        }
    }
?>