<?php
    abstract class courses extends db {
        public function __construct(){
            parent::__construct();
        }
        abstract function allCourses($offset,$search);
        abstract function addCourse($name,$catId,$tags,$desc, $teacher);
    //   abstract function searchCourses();
    //   abstract function studentCourses();
    //   abstract function addCourse();
    //   abstract function editCourse();
    //   abstract function deleteCourse();
    }
?>