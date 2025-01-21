<?php
    class adminCont extends authController{
        private $adminModel;
        public function __construct(){
            $this -> adminModel = new admin();
        }
        // admin dashboard
        public function dashboard(){
            
            if(isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "admin") {
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
            if(isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "admin") {
            $pendingTeachersDetails = $this->adminModel->getPendingTeachersDetails();
            $acceptedTeacher = $this->adminModel->acceptedTeachers();
            $adminId = $_SESSION["user_id"];
            $data = $this->adminModel->getAdminData($adminId); 
            $this->render('admin/teacherRequests', ["pteachers" => $pendingTeachersDetails, "admin" => $data,"acceptedTeachers" => $acceptedTeacher]);
            } else {
                echo "please log in admin: ";
                echo "<a href='signin'>Log in</a>";
            }
        }
        function teachersStatus(){
            if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "admin") {
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
          // show Categories and tags
          function showCatsTags(){
            if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "admin"){
                $id = $_SESSION["user_id"];
            $data = $this->adminModel->getAdminData($id);
            // get categories
            $categories = $this->adminModel->getCategories();
            // :get tags 
            $tags = $this->adminModel->getTags();
            // render tags and categories to view 
            $this -> render("admin/tagsCats",[ "admin" => $data,"categories" => $categories, "tags" => $tags]);
            }
        }
        // delete tags
        public function deleteTag() {
            if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "admin"){

        $id = $_GET["id"];
        $this->adminModel->deleteTag($id);
        $this -> showCatsTags();
            }
        }
        // add tags
        public function addTags(){
            if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "admin"){
               if (isset($_GET["addTags"])){
                $tags = explode(",",$_GET["tags"]);
                    foreach($tags as $tag){
                        $this ->adminModel-> addTags($tag);
                    }
                header("location:/tagsCats");
            }
            }

        }
     
        // delete categories
        public function deleteCat() {
            if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "admin"){

        $id = $_GET["id"];
        $this->adminModel->deleteCat($id);
        $this -> showCatsTags();
            }
        }
        // add categories
        public function addCategories(){
            if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "admin"){
               if (isset($_GET["addCat"])){
                $cat = $_GET["add-category"];
                        $this ->adminModel-> addCategories($cat);
                header("location:/tagsCats");
            }
            }

        }
        function allUsers(){
            if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "admin"){
                $allUsers = $this -> adminModel -> allUsers();
                $id = $_SESSION["user_id"];
                $data = $this->adminModel->getAdminData($id);
                $this -> render("admin/allUsers",["allUsers"=>$allUsers, "admin"=> $data]);
            }
        }
        function deleteUser(){
            if (isset($_SESSION["user_role"]) && $_SESSION["user_role"] === "admin"){
                $this -> adminModel -> deleteUser((int)$_GET["id"]);
                $this -> allUsers();
            }
        }
    }
?>