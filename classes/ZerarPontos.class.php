<?php
	class ZerarPontos{
		public function zerar_Pontos($materia,$usuario,$Totalpontos)
		{	
			$conectar=new DB;
			$conexao=$conectar->conectar();
			//deletando no banco de dados
			$DeletePontuacao = mysqli_query($conexao,"DELETE FROM pontuacao WHERE cod_usuario='$usuario' and cod_materia='$materia'");					
			mysqli_close($conexao);			
		}
	}
?>