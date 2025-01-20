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
    }
?>