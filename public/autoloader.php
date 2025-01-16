<?php
    spl_autoload_register("controllerAutoloader");
    spl_autoload_register("modelAutoloader");
    
    function controllerAutoloader($class) {
        $file = __DIR__ . "/../app/controllers/" . $class . ".php";
        if (file_exists($file)) {
            include $file;
        }
    }
    
    function modelAutoloader($class) {
        $file = __DIR__ . "/../app/models/" . $class . ".php";
        if (file_exists($file)) {
            include $file;
        }
    }
?>