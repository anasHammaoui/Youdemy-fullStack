<?php
session_start();
include_once "../app/config/db.php";
include_once "../core/Router.php";
include_once "../core/Route.php";
include_once "autoloader.php";


$router = new Router();
Route::setRouter($router);



// Define routes
// auth routes 
Route::get('/', [coursesCont::class, 'allCourses']);
Route::get('/signin', [authController::class, 'renderSignIn']);
Route::get('/signup', [authController::class, 'renderSignUp']);
Route::POST('/signup/create', [authController::class, 'signUp']);
Route::POST('/login/getIn', [authController::class, 'login']);
Route::get('/logout', [authController::class, 'logOut']);

// student routes
Route::get('/enroll',[studentCont::class,'enrolled']);
// Dispatch the request
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);


