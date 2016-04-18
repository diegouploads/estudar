<?php
//metodo de checar ususario

if((isset($_SESSION["email"])) && (isset($_SESSION["usuario"]))){
	$logado=1;
	$nivel=$_SESSION["nivel"];
	$nome=$_SESSION["nome"];
	$usuario=$_SESSION["usuario"];
}
?>