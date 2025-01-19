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
            $courses = $this -> connection -> prepare("SELECT courses.course_name,courses.thumbnail, categories.category_name, COUNT(enrollement.student_id) as students from courses join categories on courses.category_id = categories.category_id LEFT join enrollement on enrollement.course_id = courses.course_id where teacher_id = ? group by courses.course_id");
            $courses -> execute([$id]);
            return $courses -> fetchAll(PDO::FETCH_ASSOC);
        }
        // get total courses
        // function total courses by teacher 
        function totalTeacherCourses($id){
            $total = $this -> connection -> prepare("SELECT count(course_id) as total from courses where teacher_id = ?");
            $total -> execute([$id]);
            return $total -> fetch(PDO::FETCH_ASSOC);
        }
    }
?>