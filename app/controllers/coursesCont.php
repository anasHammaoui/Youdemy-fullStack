<?php
    class coursesCont extends BaseController{
        private $docCoursesModel;
        private $vidCoursesModel;
        private $enrollements;
        public function __construct() {
            $this -> docCoursesModel = new docCourse();
            $this -> vidCoursesModel = new vidCourse();
            $this -> enrollements = new Student();
        }
          // vaidation inputs
               // VALIDATION
    function validateInputs($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
        // show all courses to in home page
        public function allCourses(){
            // doc pagination
            $docPage = isset($_GET["docPage"]) ? (int)$_GET["docPage"] : 1;
            $docoffset = ($docPage - 1) * 4;
            // vid pagination
            $vidPage = isset($_GET["vidPage"]) ? (int)$_GET["vidPage"] : 1;
            $vidoffset = ($vidPage - 1) * 4;
            // search
            $search = (isset($_GET["search"]) && !empty($_GET["search"])  )? $_GET["search"] : NULL;
            // render data
            $docCourses = $this -> docCoursesModel -> allCourses((int)$docoffset,$search);
            $vidCourses = $this -> vidCoursesModel -> allCourses((int)$vidoffset,$search);
            // total records for pagination
            $total_vids = $this -> vidCoursesModel -> total_vidCourses() ;
            $total_docs = $this -> docCoursesModel -> total_docCourses()  ;
            // my enrolls
            $myEnrolls = [];
            if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "student") {
                $myEnrolls = $this -> enrollements -> getMyEnrolls((int)$_SESSION["user_id"]);
            }
            // var_dump($docCourses,$vidCourses);
            $this -> render("home",["docCourses"=> $docCourses,"vidCourses"=> $vidCourses,"myEnrolls"=>$myEnrolls, "total_vids" => $total_vids, "total_docs" => $total_docs]);
        }
        // add courses for teachers
        public function addCourse(){
            if (isset($_GET["addCourse"]) && $_SESSION["user_role"] === "teacher"){
                $name = $this -> validateInputs($_GET["courseName"]);
                $type = $this -> validateInputs($_GET["courseType"]);
                $category = $this -> validateInputs($_GET["courseCat"]);
                $tags = $_GET["courseTags"];
                $description = $this -> validateInputs($_GET["courseDesc"]);
                $cdn = $this -> validateInputs($_GET["courseCdn"]);
                $thumb = $this -> validateInputs($_GET["courseThm"]);
                
                if ($type === "video") {
                    if($this -> vidCoursesModel -> addCourse($name,$category,$tags,$description,$_SESSION["user_id"],$thumb,$cdn)){
                       header("location:/teacher");
                    } else {
                        echo "failed to add course";
                    }
                } elseif($type === "document"){
                    if($this -> docCoursesModel -> addCourse($name,$category,$tags,$description,$_SESSION["user_id"],$thumb,$cdn)){
                        header("location:/teacher");
                     } else {
                         echo "failed to add course";
                     }
                }
            }
        }
    //   edit courses for teachers
        function editCourse(){
            if (isset($_GET["editCourse"]) && $_SESSION["user_role"] === "teacher"){
                $name = $this -> validateInputs($_GET["editName"]);
                $type = $this -> validateInputs($_GET["editType"]);
                $category = $this -> validateInputs($_GET["editCat"]);
                $tags =  $_GET["editTags"];
                $description = $this -> validateInputs($_GET["editDesc"]);
                $cdn = $this -> validateInputs($_GET["editCdn"]);
                $thumb = $this -> validateInputs($_GET["editThm"]);
                $id = $this -> validateInputs($_GET["id-edit"]);
                if ($type === "video") {
                    if($this -> vidCoursesModel -> editCourse($name,$category,$tags,$description,$_SESSION["user_id"],$thumb,$cdn,(int)$id)){
                        echo "edited with success";
                        echo "<script>setTimeout(()=>{ window.location = '/teacher'},4000)</script>";
                    } else {
                        echo "failed to edit course";
                    }
                } elseif($type === "document"){
                    if($this -> docCoursesModel -> editCourse($name,$category,$tags,$description,$_SESSION["user_id"],$thumb,$cdn,(int)$id)){
                        echo "edited with success";
                        echo "<script>setTimeout(()=>{ window.location = '/teacher'},4000)</script>";
                     } else {
                         echo "failed to edit course";
                     }
                }
            }
        }
        // delete course for teachers
        function deleteCourse() {
            if ( $_SESSION["user_role"] === "teacher" ) {
                if ($_GET["type"] === "document") {
                   if ( $this -> docCoursesModel -> deleteCourse((int)$_GET["id"])){
                    header("location:/teacher");
                    exit();
                   }  else {
                    echo "failed to edit";
                    echo "<a href='teacher'>Go to Dashboard</a>";
                }
                } elseif($_GET["type"] === "video"){
                    if ( $this -> vidCoursesModel -> deleteCourse((int)$_GET["id"])){
                        header("location:/teacher");
                        exit();
                       }  else {
                        echo "failed to edit";
                        echo "<a href='teacher'>Go to Dashboard</a>";
                    }
                }
                
            }
        }
    }
?>