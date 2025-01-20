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
        }
    }
?>