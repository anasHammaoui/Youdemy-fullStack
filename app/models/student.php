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
        $myCourses = $this->connection->prepare("SELECT enrollement.enroll_status, enrollement.enroll_date, courses.course_name,courses.thumbnail, courses.course_id, courses.course_type, categories.category_name, users.full_name, courses.course_cdn from enrollement inner join courses on courses.course_id = enrollement.course_id inner join categories on categories.category_id = courses.category_id inner join users on users.user_id = courses.teacher_id where enrollement.student_id = ?");
        $myCourses->execute([$idUser]);
        return $myCourses->fetchAll(PDO::FETCH_ASSOC);
    }
    }
?>