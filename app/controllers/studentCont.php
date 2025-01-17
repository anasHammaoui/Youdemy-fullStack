<?php
    class studentCont extends BaseController{
        private $student;
        public function __construct(){
            $this -> student = new Student();
        }
        // enroll student
        public function enrolled(){
        $idCourse = $_GET['course_id'];
        $idStudent = $_SESSION["user_id"];
        $this->student->enrolled($idStudent, $idCourse);
        header("location: /");
    }
    }
?>