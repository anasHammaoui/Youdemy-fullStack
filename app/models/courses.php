<?php
    abstract class courses extends db {
        protected $courseModel;
        public function __construct(){
            parent::__construct();
            $this -> courseModel = $this ->  connection;
        }
        abstract function allCourses();
    //   abstract function searchCourses();
    //   abstract function studentCourses();
    //   abstract function addCourse();
    //   abstract function editCourse();
    //   abstract function deleteCourse();
    }
?>