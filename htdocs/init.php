<?php

ob_start();
@session_start();

spl_autoload_register(function($file){
    require_once "libclass/$file.class.php";
});


?>