<?php
    class Student extends db {
        public function __construct(){
            parent::__construct();
        }
        // enroll student
        public function enrolled($idStudent, $idCourse){
        $courses = $this->connection->prepare("INSERT INTO enrollement(student_id,course_id) VALUES(?,?)");
        return $courses->execute([$idStudent, $idCourse]);
    }
    }
?>