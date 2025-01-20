<?php
    class teacher extends db{
        function getCategories(){
            $getCats = $this -> connection -> prepare("SELECT * from categories");
            $getCats -> execute();
            return $getCats -> fetchAll();
        }
        function getTags(){
            $getTags = $this -> connection -> prepare("SELECT * from tags");
            $getTags -> execute();
            return $getTags -> fetchAll();
        }
        // get all teacher courses
        function teacherCourses($id){
            $courses = $this -> connection -> prepare("SELECT courses.course_id,courses.course_type,  courses.course_name,courses.thumbnail, categories.category_name, COUNT(enrollement.student_id) as students from courses join categories on courses.category_id = categories.category_id LEFT join enrollement on enrollement.course_id = courses.course_id where teacher_id = ? group by courses.course_id");
            $courses -> execute([$id]);
            return $courses -> fetchAll(PDO::FETCH_ASSOC);
        }
        // get total courses
        // function total courses by teacher 
        function totalTeacherCourses($id){
            $total = $this -> connection -> prepare("SELECT count(courses.course_id) as total, count(enrollement.student_id) as students from courses left join enrollement on enrollement.course_id = courses.course_id where courses.teacher_id = ? ");
            $total -> execute([$id]);
            return $total -> fetch(PDO::FETCH_ASSOC);
        }
        // get enrol requests 
        public function getRequests($teacherId){
        $requests = $this->connection->prepare("SELECT enrollement.enroll_id,enrollement.course_id,enrollement.enroll_status,users.full_name,users.email,courses.course_name,enrollement.enroll_date
        FROM enrollement JOIN courses JOIN users
        WHERE courses.teacher_id = ? AND enrollement.course_id = courses.course_id AND enrollement.enroll_status = 'pending'  AND users.user_id = enrollement.student_id");
        $requests->execute([$teacherId]);
        
        return($requests->fetchAll(PDO::FETCH_ASSOC));
    }
    // get teacher courses enrollements
    public function getEnrolled($teacherId) {
        $query = "SELECT enrollement.enroll_id,enrollement.course_id,enrollement.enroll_status,users.full_name,users.email,courses.course_name,enrollement.enroll_date
        FROM enrollement JOIN courses JOIN users
        WHERE courses.teacher_id = ? AND enrollement.course_id = courses.course_id AND enrollement.enroll_status = 'accepted'  AND users.user_id = enrollement.student_id";
        $enrollement = $this->connection->prepare($query);
        $enrollement->execute([$teacherId]);
        return $enrollement->fetchAll(PDO::FETCH_ASSOC);
    }
    // accept enrollement
    function acceptEnroll($enrollId){
        try {
            $accept = $this -> connection -> prepare("UPDATE enrollement set enroll_status = 'accepted' where enroll_id = ?");
            $accept -> execute([$enrollId]);
            return true;
        } catch (Exception){
            return false;
        }
    }
}

?>