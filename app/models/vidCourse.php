<?php
class vidCourse extends courses {
    public function allCourses($offset,$search){
            $getAllDocCourses = $this -> connection -> prepare("SELECT distinct courses.course_name, courses.course_desc, courses.course_id, courses.course_type, courses.thumbnail, 
            users.full_name, categories.category_name
    FROM courses
    INNER JOIN users ON users.user_id = courses.teacher_id
    INNER JOIN categories ON categories.category_id = courses.category_id
    left JOIN coursTags ON coursTags.course_id = courses.course_id
    left JOIN tags ON tags.tag_id = coursTags.tag_id
    WHERE ((tags.tag_name LIKE :search or :emptySearch is null)  AND course_type = 'video')
    LIMIT 4 OFFSET :offset");
            $searchLike = "%$search%";
            $getAllDocCourses -> bindValue(":search",$searchLike);
            $getAllDocCourses -> bindValue(":emptySearch",$search);
            $getAllDocCourses -> bindValue(":offset",$offset, PDO::PARAM_INT);
            $getAllDocCourses -> execute();
            $getDocs = $getAllDocCourses -> fetchAll(PDO::FETCH_ASSOC);
            return $getDocs;
    }
    function total_vidCourses(){
        $total = $this -> connection -> prepare("SELECT COUNT(course_id) as total_vids from courses where course_type = 'video'");
        $total -> execute();
        return $total -> fetch(PDO::FETCH_ASSOC);
    }
    // course details
    public function getCourseDetails($course_id){
        $details = $this -> connection -> prepare("SELECT courses.course_id,courses.course_cdn,courses.course_desc, courses.course_name,courses.thumbnail, courses.course_type, users.full_name, categories.category_name from courses inner join users on users.user_id = courses.teacher_id inner join categories on categories.category_id = courses.category_id  where course_type = 'video' and courses.course_id = ?");
        $details -> execute([$course_id]);
        return $details -> fetch(PDO::FETCH_ASSOC);
    }
     // add course for teacher
     function addCourse($name,$catId,$tags,$desc, $teacher,$thumb,$cdn){
        try{
            $this -> connection -> beginTransaction();
            // insert course in courses table
            $addToCourse = $this -> connection -> prepare("INSERT INTO COURSES(course_name,course_type,teacher_id,category_id, course_desc, thumbnail,course_cdn) VALUES (?, 'video',?,?,?,?,?)");
            $addToCourse -> execute([$name,(int)$teacher,(int)$catId,$desc,$thumb,$cdn]);
            $courseId = $this -> connection -> lastInsertId();
            // insert tags in tags table
            foreach($tags as $tag){
                $tag = (int)$tag;
                $addToCoursTags = $this -> connection -> prepare("INSERT INTO coursTags(tag_id,course_id) VALUES (?,?)");
                $addToCoursTags -> execute([$tag,$courseId]);
            }
            $this -> connection -> commit();
            return true;
        } catch(Exception){
            $this -> connection -> rollBack();
             return false;
        }

    }
      // Edit course for teacher
      function editCourse($name,$catId,$tags,$desc, $teacher,$thumb,$cdn, $id ){
        try{
            $this -> connection -> beginTransaction();
            // insert course in courses table
            $addToCourse = $this -> connection -> prepare("UPDATE COURSES SET course_name = ? ,course_type = 'video',teacher_id = ?,category_id = ?, course_desc = ? ,thumbnail = ?,course_cdn = ? where course_id = ?");
            $addToCourse -> execute([$name,(int)$teacher,(int)$catId,$desc,$thumb,$cdn,$id]);
            $delOldTags = $this -> connection -> prepare("DELETE FROM coursTags where course_id = ?");
            $delOldTags -> execute([$id]);
            // insert tags in tags table
            foreach($tags as $tag){
                $tag = (int)$tag;
                $addToCoursTags = $this -> connection -> prepare("UPDATE coursTags SET tag_id = ? where course_id = ? ");
                $addToCoursTags -> execute([$tag,$id]);
            }
            $this -> connection -> commit();
            return true;
        } catch(Exception){
            $this -> connection -> rollBack();
             return false;
        }

    }
    // delete course
    function deleteCourse($id){
        try {
            $delete = $this -> connection -> prepare("DELETE FROM courses where course_id = ? and course_type = 'video'");
        $delete ->  execute([$id]);
        return true;
        } catch (Exception) {
            return false;
        }
    }
}
?>