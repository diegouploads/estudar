<?php
include("includes/header.php");

if(isset($logado)){
	include("views/estudar.php");
}
else{
	include("views/login.php");
}
?>