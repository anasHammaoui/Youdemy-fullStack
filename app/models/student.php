<?php
    class Student extends db {
        public function __construct(){
            parent::__construct();
        }
        // enroll student
        public function enrollIn($idStudent, $idCourse){
        $courses = $this->connection->prepare("INSERT INTO enrollement(student_id,course_id) VALUES(?,?)");
        $courses->execute([$idStudent, $idCourse]);
    }
    // student courses
    public function getMyEnrolls($idUser)
    {
        $myCourses = $this->connection->prepare("SELECT * FROM courses inner join enrollement inner join users inner join categories WHERE enrollement.student_id=? and courses.course_id = enrollement.course_id and courses.teacher_id = users.user_id");
        $myCourses->execute([$idUser]);
        return $myCourses->fetchAll(PDO::FETCH_ASSOC);
    }
    }
?>