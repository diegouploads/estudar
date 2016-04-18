
<?php
	//starts
	ob_start();
	session_start();
	
	//Gloais
	include("globais.php");
	
	//include das classes
	include("classes/DB.class.php");
	include("classes/Cadastro.class.php");
	include("classes/Login.class.php");
	include("classes/Cad_pergunta.class.php");
	include("classes/Resposta.class.php");
	include("classes/Escolher_materia.class.php");
	include("classes/ZerarPontos.class.php");

	//conexao com banco de dados
	$conectar=new DB;
	$conectar=$conectar->conectar();

	//Métodos
	include("controllers/cadastro.php");
	include("controllers/login.php");
	include("controllers/logout.php");
	include("controllers/check.php");
	include("controllers/cad_pergunta.php");
	include("controllers/responder.php");
	include("controllers/zerarPontos.php");
	include("controllers/escolha_materia.php");

?>