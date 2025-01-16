<?php
class vidCourse extends courses {
    public function allCourses(){
        $getAllDocCourses = $this -> connection -> prepare("SELECT * from courses where course_type = 'video'");
        $getAllDocCourses -> execute();
        $getDocs = $getAllDocCourses -> fetchAll(PDO::FETCH_ASSOC);
        return $getDocs;
    }
}
?>