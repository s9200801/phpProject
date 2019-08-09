<?php
require_once 'router.php';

$Router= new router();

$Router->add('/final/homepage.php',function(){
	echo 'Success';
});

$Router->add('default',function(){
	echo 'Default';
});

$Router->run(); 
 ?>