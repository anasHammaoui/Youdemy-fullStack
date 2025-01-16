<?php
class vidCourse extends courses {
    public function allCourses(){
        $getAllDocCourses = $this -> connection -> prepare("SELECT courses.course_name,courses.thumbnail, courses.course_type, users.full_name, categories.category_name from courses inner join users on users.user_id = courses.teacher_id inner join categories on categories.category_id = courses.category_id  where course_type = 'video'");
        $getAllDocCourses -> execute();
        $getDocs = $getAllDocCourses -> fetchAll(PDO::FETCH_ASSOC);
        return $getDocs;
    }
}
?>