<?php
    class admin extends db {
        // get admin data
        public function getAdminData($id){
            $query = "SELECT full_name, email,user_id FROM users WHERE user_id = ? ";
            $admin = $this->connection->prepare($query);
            $admin->execute([$id]);
            return $admin->fetch(PDO::FETCH_ASSOC);
        }
    // get total number of courses
    public function getCoursesNum(){
        $query = "SELECT COUNT(*) as count_courses FROM courses ";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // get total number of categories
    public function getCategoriesNum(){
        $query = "SELECT COUNT(*) as total_cats FROM categories ";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // get number of punding teachers
    public function getPendingTeachers() {
        $query = "SELECT COUNT(*) as count_pending FROM users WHERE user_role = 'teacher' AND user_status = 'pending' ";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // get punding teachers details
    public function getPendingTeachersDetails(){
        $query = "SELECT full_name, user_id, user_status, email FROM users WHERE user_role = 'teacher' AND user_status = 'pending'";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //  get top three teachers
    public function topThreeTeachers(){
        $topTeachers = $this->connection->prepare("SELECT COUNT(courses.course_id) AS total_courses, users.full_name FROM courses JOIN users ON courses.teacher_id = users.user_id GROUP BY users.full_name ORDER BY total_courses DESC LIMIT 3");
        $topTeachers->execute();
        return $topTeachers->fetchAll(PDO::FETCH_ASSOC);
    }
    //  get top course
    public function topCourse(){
        $topTeachers = $this->connection->prepare("SELECT  COUNT(enrollement.course_id) as students, courses.course_name,courses.course_id, courses.thumbnail FROM enrollement JOIN courses ON courses.course_id = enrollement.course_id where enrollement.enroll_status = 'accepted' group by courses.course_id ORDER BY students DESC LIMIT 1 ");
        $topTeachers->execute();
        return( $topTeachers->fetch(PDO::FETCH_ASSOC));
    }
    }
?>