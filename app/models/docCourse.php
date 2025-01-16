<?php
class docCourse extends courses {
    public function allCourses(){
        $getAllDocCourses = $this -> connection -> prepare("SELECT * from courses where course_type = 'document'");
        $getAllDocCourses -> execute();
        $getDocs = $getAllDocCourses -> fetchAll(PDO::FETCH_ASSOC);
        return $getDocs;
    }
}
?>