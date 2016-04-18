<?php
//metodo de contrato
if($startaction == 1 && $acao == "responder")
{
	$alternativa=$_POST["alternativa"];
	$nameText1=$_POST["nameText1"];
	$nameText2=$_POST["nameText2"];
	$materia=$_POST["materia"];
	
	
	$conectar=new DB;
	$conexao=$conectar->conectar();
	
	//sem validacao
				//executa a classe de cadastro
				$conectar=new Resposta;
				$conectar=$conectar->responder($alternativa,$nameText1,$nameText2,$materia);
}
?>