<?php
    class studentCont extends BaseController{
        private $student;
        private $vidCourses;
        private $docCourses;
        public function __construct(){
            $this -> student = new Student();
            $this -> vidCourses = new vidCourse();
            $this -> docCourses = new docCourse();
        }
        // enroll student
        public function enrolled(){
        $idCourse = $_GET['course_id'];
        $idStudent = $_SESSION["user_id"];
        if ($_SESSION["user_role"] === "student"){
            $this->student->enrollIn((int)$idStudent, (int)$idCourse);
        header("location: /");
        }
    }
    public function myLearning(){
        $myEnrolls = [];
        if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "student") {
        $myEnrolls = $this -> student -> getMyEnrolls((int)$_SESSION["user_id"]);
    }
    $this -> render("student/myLearning", ["myEnrolls" => $myEnrolls]);
}
    public function courseDetails(){
        $courseId = $_GET["course"];
        $course_type = $_GET["type"];
        if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "student"){
            $details = [];
            if ($course_type === "document"){
                $details = $this -> docCourses -> getCourseDetails((int)$courseId);
            } elseif($course_type === "video"){
                $details = $this -> vidCourses -> getCourseDetails((int)$courseId);
            }
            $this -> render("student/coursePage",["details" => $details]);
        }
    }
    }
?>