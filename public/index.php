<?php
session_start();


include_once "../core/Route.php";
include_once "controllerAutoLoader.php";



$router = new Router();
Route::setRouter($router);



// Define routes
// auth routes 
Route::get('/', [AuthController::class, 'showRegister']);

// Dispatch the request
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);


