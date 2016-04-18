<?php
	class Cad_pergunta{
		public function cadastrarPergunta($pergunta,$aterA,$aterB,$aterC,$certa,$materia,$usuario)
		{	
			$conectar=new DB;
			$conexao=$conectar->conectar();
			
			$respA=0;
			$respB=0;
			$respC=0;
			
			if($certa=='A'){
				$respA=1;
			}
			if($certa=='B'){
				$respB=1;
			}
			if($certa=='C'){
				$respC=1;
			}
			
			$result= mysqli_query($conexao,"SELECT cod_usuario FROM usuario WHERE username='$usuario'");
			$array = mysqli_fetch_assoc($result);
			$usuario = implode("",$array);
			
			//inserção no banco de dados
			$insertPergunta = mysqli_query($conexao,"INSERT INTO perguntas (pergunta, cod_usuario, cod_materia) VALUES ('$pergunta', $usuario,$materia)");
			
			$result= mysqli_query($conexao,"SELECT cod_perguntas FROM perguntas ORDER BY cod_perguntas DESC LIMIT 1");
			$array = mysqli_fetch_assoc($result);
			$cod_pergunta = implode("",$array);
			
			
			$insertAlternativaA = mysqli_query($conexao,"INSERT INTO alternativas (resposta, cod_perguntas, alternativa) VALUES ('$respA', '$cod_pergunta', '$aterA')");
			$insertAlternativaB = mysqli_query($conexao,"INSERT INTO alternativas (resposta, cod_perguntas, alternativa) VALUES ('$respB', '$cod_pergunta', '$aterB')");
			$insertAlternativaC = mysqli_query($conexao,"INSERT INTO alternativas (resposta, cod_perguntas, alternativa) VALUES ('$respC', '$cod_pergunta', '$aterC')");
								
									
			mysqli_close($conexao);			
						
			if(isset($insertPergunta) &&
			   isset($insertAlternativaA) &&
			   isset($insertAlternativaB) &&
			   isset($insertAlternativaC)){
				$flash="Cadastrada com sucesso!";
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