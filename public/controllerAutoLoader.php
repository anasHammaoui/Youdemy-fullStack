<?php
spl_autoload_register("controller");
function controller($class){
    require_once "../app/controllers/".$class.".php";
}
?>