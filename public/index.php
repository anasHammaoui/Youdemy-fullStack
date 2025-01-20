<?php
session_start();
include_once "../app/config/db.php";
include_once "../core/Router.php";
include_once "../core/Route.php";
include_once "autoloader.php";


$router = new Router();
Route::setRouter($router);



// Define routes
// home page show all courses and search courses
Route::get('/', [coursesCont::class, 'allCourses']);
Route::get('/search', [coursesCont::class, 'allCourses']);
// auth routes 
Route::get('/signin', [authController::class, 'renderSignIn']);
Route::get('/signup', [authController::class, 'renderSignUp']);
Route::POST('/signup/create', [authController::class, 'signUp']);
Route::POST('/login/getIn', [authController::class, 'login']);
Route::get('/logout', [authController::class, 'logOut']);

// student routes
Route::get('/enroll',[studentCont::class,'enrolled']);
Route::get('/myLearning',[studentCont::class,'myLearning']);
Route::get('/details',[studentCont::class,'courseDetails']);
// teacher routes
Route::get('/teacher',[teacherCont::class,'dashboard']);
Route::get('/addcourse',[coursesCont::class,'addCourse']);
Route::get('/editcourse',[coursesCont::class,'editCourse']);
Route::get('/delete-course',[coursesCont::class,'deleteCourse']);
Route::get('/courseStudents',[teacherCont::class,'requests']);
Route::get('/acceptStudents',[teacherCont::class,'acceptEnroll']);
Route::get('/declineStudent',[teacherCont::class,'declineEnroll']);
// admin routes
Route::get('/admin',[adminCont::class,'dashboard']);
Route::get('/teacherRequests',[adminCont::class,'teachersRequests']);
Route::get('/status',[adminCont::class,'teachersStatus']);
// Dispatch the request
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);


