<?php
//metodo de contrato
if($startaction == 1 && $acao == "escolhaMateria")
{
	$materia=$_POST["materia"];
	$usuario=$_POST["usuario"];
	$conectar=new DB;
	$conexao=$conectar->conectar();
	
	//sem validacao
				//executa a classe de cadastro
				$conectar=new Escolher_materia;
				$conectar=$conectar->escolhaMateria($materia,$usuario);
}
?>