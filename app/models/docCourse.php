<?php
class docCourse extends courses {
    public function allCourses($offset){
        $getAllDocCourses = $this -> connection -> prepare("SELECT courses.course_name, courses.course_type, courses.thumbnail, users.full_name, categories.category_name from courses inner join users on users.user_id = courses.teacher_id inner join categories on categories.category_id = courses.category_id  where course_type = 'document' limit 2 OFFSET :offset");
        $getAllDocCourses -> bindValue(":offset",$offset, PDO::PARAM_INT);
        // var_dump($getAllDocCourses);die();
        $getAllDocCourses -> execute();
        $getDocs = $getAllDocCourses -> fetchAll(PDO::FETCH_ASSOC);
        return $getDocs;
    }
}
?>