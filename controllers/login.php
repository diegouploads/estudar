<?php
//Metodo de login
if($startaction == 1 && $acao == "logar"){
	//Dados
	$email=addslashes($_POST["email"]);
	$senha=addslashes(md5($_POST["senha"]));
	
	if(empty($email) || empty($senha)){
		$msg="Preencha todos os campos!";
	}
	else
	{
		/*if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$msg="Digite seu e-mail corretamente!";
		}else{*/
			//Executa a busca pelo usuário
			$login=new Login;
			$login=$login->logar($email, $senha); 
			
		//}
	}
}
?>