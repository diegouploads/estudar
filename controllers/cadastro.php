<?php
//metodo de cadastro
if($startaction == 1 && $acao == "cadastrar")
{
	$nome=$_POST["nome"];
	$email=$_POST["email"];
	$senha=$_POST["senha"];
	$usuario=$_POST["usuario"];
	if(empty($nome)||empty($email)||empty($senha)||empty($usuario))
	{
		$msg="Preencha todos o campos";
	}
	//todos os campos preenchidos
	else
	{	
		//email valido
		if(filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			if(strlen($senha)<8)
			{
			//senha invalida
			$msg="Senha deve ter no minimo oito caracteres!";
			}
			//senha valida
			else
			{
				//executa a classe de cadastro
				$conectar=new Cadastro;
				$conectar=$conectar->cadastrar($nome,$email,$senha,$usuario);
			}
		}
		//email invalido
		else
		{
		$msg="Digite seu email corretamente!";	
		}
	}
}
?>