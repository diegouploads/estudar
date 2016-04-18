<?php
	class Cadastro{
		public function cadastrar($nome,$email,$senha,$usuario){
			
			$conectar=new DB;
			$conexao=$conectar->conectar();
			
			//tratamento das variaveis
			//$nome=ucwords(strtolower($nome));
			$senha=md5($senha);
			
			$validarusuario= mysqli_query($conexao,"SELECT * FROM usuario WHERE username='$usuario'");
			$contar =  mysqli_num_rows($validarusuario);
			if($contar == 0)
			{
				$validaremail= mysqli_query($conexao,"SELECT * FROM usuario WHERE email_usuario='$email'");
				$contar =  mysqli_num_rows($validaremail);
				if($contar == 0)
				{
					//inserção no banco de dados
					$insert = mysqli_query($conexao,"INSERT INTO usuario (nome,email_usuario,senha,username,nivel,status) 
					VALUES ('$nome','$email','$senha','$usuario',2,1)");
					
					mysqli_close($conexao);

				}
				else
				{
					$flash="E-mail já cadastrado do Sistema";
				}
			}
			else
			{
				$flash="Usuario já cadastrado do Sistema";
			}			
						
			if(isset($insert)){
				$flash="Cadastro realizado com sucesso!";
			}
			else
			{
				if(empty($flash))
				{
					$flash="Ops! Houve um erro no sistema, contate o Administrador!";
				}
			}
			
			//retorno para o usuario
			echo "<center>$flash</center>";
				
		}
	}
?>