<?php
    class adminCont extends BaseController{
        private $adminModel;
        public function __construct(){
            $this -> adminModel = new admin();
        }
        public function dashboard(){
            
             $adminId = $_SESSION["user_id"];
             $data = $this->adminModel->getAdminData($adminId); 
             $numCourses = $this->adminModel->getCoursesNum();
             $pendingTeachers = $this->adminModel->getPendingTeachers();
            //  $pendingTeachersDetails = $this->adminModel->getPendingTeachersDetails();
             $categoriesNum = $this->adminModel->getCategoriesNum();
            //  $lastThreeTeachers = $this->adminModel->lastThreeTeachers();
            //  $lastThreeCourses = $this->adminModel->lastThreeCourses();
             $this->render('admin/admin', [
                //  "pteachers" => $pendingTeachersDetails,
                 "categoryNum" => $categoriesNum,
                 "pendingTeachers" => $pendingTeachers,
                 "courseNum" => $numCourses,
                 "admin" => $data,
                //  "lastTeachers" => $lastThreeTeachers,
                //  "lastCourses" => $lastThreeCourses
             ]);
        }
    }
?>