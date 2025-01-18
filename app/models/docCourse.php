<?php
class docCourse extends courses {
    public function allCourses($offset,$search){
        $getAllDocCourses = $this -> connection -> prepare("SELECT distinct courses.course_name, courses.course_desc, courses.course_id, courses.course_type, courses.thumbnail, 
        users.full_name, categories.category_name
FROM courses
INNER JOIN users ON users.user_id = courses.teacher_id
INNER JOIN categories ON categories.category_id = courses.category_id
left JOIN coursTags ON coursTags.course_id = courses.course_id
left JOIN tags ON tags.tag_id = coursTags.tag_id
WHERE ((tags.tag_name LIKE :search or :emptySearch is null)  AND course_type = 'document')
LIMIT 2 OFFSET :offset");
        $searchLike = "%$search%";
        $getAllDocCourses -> bindValue(":search",$searchLike);
        $getAllDocCourses -> bindValue(":emptySearch",$search);
        $getAllDocCourses -> bindValue(":offset",$offset, PDO::PARAM_INT);
        // var_dump($getAllDocCourses);die();
        $getAllDocCourses -> execute();
        $getDocs = $getAllDocCourses -> fetchAll(PDO::FETCH_ASSOC);
        return $getDocs;
    }
     // course details
     public function getCourseDetails($course_id){
        $details = $this -> connection -> prepare("SELECT courses.course_id,courses.course_cdn,courses.course_desc, courses.course_name,courses.thumbnail, courses.course_type, users.full_name, categories.category_name from courses inner join users on users.user_id = courses.teacher_id inner join categories on categories.category_id = courses.category_id  where course_type = 'document' and courses.course_id = ?");
        $details -> execute([$course_id]);
        return $details -> fetch(PDO::FETCH_ASSOC);
    }
}
?>