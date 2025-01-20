<?php
    class adminCont extends BaseController{
        private $adminModel;
        public function __construct(){
            $this -> adminModel = new admin();
        }
        // admin dashboard
        public function dashboard(){
            
            if($_SESSION["user_role"] === "admin") {
                $adminId = $_SESSION["user_id"];
                $data = $this->adminModel->getAdminData($adminId); 
                $numCourses = $this->adminModel->getCoursesNum();
                $pendingTeachers = $this->adminModel->getPendingTeachers();
                $pendingTeachersDetails = $this->adminModel->getPendingTeachersDetails();
                $categoriesNum = $this->adminModel->getCategoriesNum();
                $topThreeTeachers = $this->adminModel->topThreeTeachers();
                $topCourse = $this->adminModel->topCourse();
                $this->render('admin/admin', [
                    "pteachers" => $pendingTeachersDetails,
                    "categoryNum" => $categoriesNum,
                    "pendingTeachers" => $pendingTeachers,
                    "courseNum" => $numCourses,
                    "admin" => $data,
                    "topTeachers" => $topThreeTeachers,
                    "topCourse" => $topCourse
                ]);
            } else {
                echo "please log in admin: ";
                echo "<a href='signin'>Log in</a>";
            }
        }
        // teachers requests
        function teachersRequests(){
            if($_SESSION["user_role"] === "admin") {
            $pendingTeachersDetails = $this->adminModel->getPendingTeachersDetails();
            $adminId = $_SESSION["user_id"];
            $data = $this->adminModel->getAdminData($adminId); 
            $this->render('admin/teacherRequests', ["pteachers" => $pendingTeachersDetails, "admin" => $data,]);
            } else {
                echo "please log in admin: ";
                echo "<a href='signin'>Log in</a>";
            }
        }
        function teachersStatus(){
            if ($_SESSION["user_role"] === "admin") {
                if (isset($_GET["type"]) && $_GET["type"] === "accept"){
                    $this -> adminModel -> approveTeacher((int)$_GET["id"]);
                    $this-> teachersRequests();
                } elseif (isset($_GET["type"]) && $_GET["type"] === "delete"){
                    $this -> adminModel -> rejectTeacher((int)$_GET["id"]);
                    $this-> teachersRequests();
                }
            }else {
                echo "please log in admin: ";
                echo "<a href='signin'>Log in</a>";
            }
        }
    }
?>