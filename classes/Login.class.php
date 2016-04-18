<?php
	class Login{
		public function logar($email,$senha){
			
			$conectar=new DB;
			$conexao=$conectar->conectar();
			
			$buscar= mysqli_query($conexao,"SELECT * FROM usuario WHERE email_usuario='$email' AND senha='$senha' LIMIT 1");
				if(mysqli_num_rows($buscar) == 1){
					$dados= mysqli_fetch_array($buscar,MYSQLI_BOTH);
					if($dados["status"]==1){
					$_SESSION["nome"]=$dados["nome"];
					$_SESSION["email"]=$dados["email_usuario"];
					$_SESSION["nivel"]=$dados["nivel"];
					$_SESSION["usuario"]=$dados["username"];
					setcookie("logado",1);
					$log=1;
					mysqli_close($conexao);
				}
				else
				{
					$flash="Aguarde aprovação!";
				}
			}
			if(isset($log)){
				$flash="Logado com sucesso!";	
			}
			else
			{
				if(empty($flash)){
				$flash="Digite E-mail e Senha corretamente!";
				}
			}
			if($flash<>"Logado com sucesso!"){
				echo "<center>$flash</center>";
			}
		}	 
	}
?>