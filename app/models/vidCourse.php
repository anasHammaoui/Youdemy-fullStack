<?php
class vidCourse extends courses {
    public function allCourses($offset){
        $getAllDocCourses = $this -> connection -> prepare("SELECT courses.course_id, courses.course_desc, courses.course_name,courses.thumbnail, courses.course_type, users.full_name, categories.category_name from courses inner join users on users.user_id = courses.teacher_id inner join categories on categories.category_id = courses.category_id  where course_type = 'video' limit 2 offset :offset");
        $getAllDocCourses -> bindValue(":offset",$offset, PDO::PARAM_INT);
        $getAllDocCourses -> execute();
        $getDocs = $getAllDocCourses -> fetchAll(PDO::FETCH_ASSOC);
        return $getDocs;
    }
    // course details
    public function getCourseDetails($course_id){
        $details = $this -> connection -> prepare("SELECT courses.course_id,courses.course_cdn,courses.course_desc, courses.course_name,courses.thumbnail, courses.course_type, users.full_name, categories.category_name from courses inner join users on users.user_id = courses.teacher_id inner join categories on categories.category_id = courses.category_id  where course_type = 'video' and courses.course_id = ?");
        $details -> execute([$course_id]);
        return $details -> fetch(PDO::FETCH_ASSOC);
    }
}
?>