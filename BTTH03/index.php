<?php 

include "./Controllers/StudentsController.php";
include "./Controllers/ClassesController.php";

$controller = isset($_GET['page'])?$_GET['page']:'Students';
$function = isset($_GET['fun'])?$_GET['fun']:'index';

$past = $controller . "Controller"; 
$pp = new $past(); 

$pp->$function();