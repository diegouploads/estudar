<?php
	class Escolher_materia{
		public function escolhaMateria($materia,$usuario)
		{	
			$conectar=new DB;
			$conexao=$conectar->conectar();
			
			
			$result= mysqli_query($conexao,"SELECT cod_usuario FROM usuario WHERE username='$usuario'");
			$array = mysqli_fetch_assoc($result);
			$cod_usuario = implode("",$array);

				//inserção no banco de dados
				$UpdateMateria = mysqli_query($conexao,"UPDATE usuario SET estudando_materia='$materia' WHERE cod_usuario='$cod_usuario'");					
			mysqli_close($conexao);
			
			if(isset($UpdateMateria)){
				$flash="ok";
			}else{
				$flash="erro";
			}
			//echo $flash;
		}
	}
?>