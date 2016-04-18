<?php
//metodo de contrato
if($startaction == 1 && $acao == "zerar_Pontos")
{
	$materia=$_POST["materia"];
	$usuario=$_POST["usuario"];
	$Totalpontos=$_POST["pontos"];

	$conectar=new DB;
	$conexao=$conectar->conectar();
	
	//sem validacao
				//executa a classe de cadastro
				$conectar=new ZerarPontos;
				$conectar=$conectar->zerar_Pontos($materia,$usuario,$Totalpontos);
}
?>