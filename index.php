<?php
include("includes/header.php");

if(isset($logado)){
	include("views/escolher_materia.php");
}
else{
	include("views/login.php");
}
?>