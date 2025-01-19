<?php
    class teacherCont extends BaseController{
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
    
    }
?>