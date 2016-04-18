<?php
//metodo de contrato
if($startaction == 1 && $acao == "cadastrarPergunta")
{
	$pergunta=$_POST["pergunta"];
	$aterA=$_POST["alternativaA"];
	$aterB=$_POST["alternativaB"];
	$aterC=$_POST["alternativaC"];
	$certa=$_POST["certa"];
	$materia=$_POST["materia"];
	$usuario=$_POST["usuario"];
	$flash="";
	if(empty($pergunta)||empty($aterA)||empty($aterB)||empty($aterC)||empty($certa)||($certa==3)||($materia==0))
	{
		$flash="Preencha todos o campos";
	}else{
	
	$conectar=new DB;
	$conexao=$conectar->conectar();
	
	//sem validacao
				//executa a classe de cadastro
				$conectar=new Cad_pergunta;
				$conectar=$conectar->cadastrarPergunta($pergunta,$aterA,$aterB,$aterC,$certa,$materia,$usuario);
	}
	if($flash<>""){
		echo "<center>$flash</center>";
	}
}
?>