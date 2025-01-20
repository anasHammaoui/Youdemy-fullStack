<?php
    abstract class courses extends db {
        public function __construct(){
            parent::__construct();
        }
        abstract function allCourses($offset,$search);
        abstract function addCourse($name,$catId,$tags,$desc, $teacher,$thumb,$cdn);
        abstract function editCourse($name,$catId,$tags,$desc, $teacher,$thumb,$cdn,$id);
       abstract function deleteCourse($id);
    //   abstract function searchCourses();
    //   abstract function studentCourses();
    //   abstract function addCourse();
    //   abstract function editCourse();
    //   abstract function deleteCourse();
    }
?>