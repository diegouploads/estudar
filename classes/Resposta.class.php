<?php
	class Resposta{
		public function responder($alternativa,$nameText1,$nameText2,$materia)
		{	
			$conectar=new DB;
			$conexao=$conectar->conectar();
			
			
			$result= mysqli_query($conexao,"SELECT cod_usuario FROM usuario WHERE username='$nameText2'");
			$array = mysqli_fetch_assoc($result);
			$cod_usuario = implode("",$array);
			
			if($alternativa==1){
				//inserção no banco de dados
				$insertCerto = mysqli_query($conexao,"INSERT INTO pontuacao (cod_pergunta, cod_usuario, pontos, cod_materia) VALUES ($nameText1, $cod_usuario, 10, $materia)");
			}
			if($alternativa==0){
				//inserção no banco de dados
				$insertErrado = mysqli_query($conexao,"INSERT INTO pontuacao (cod_pergunta, cod_usuario, pontos, cod_materia) VALUES ($nameText1, $cod_usuario, 0, $materia)");
			}
									
			mysqli_close($conexao);			
		}
	}
?>