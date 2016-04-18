<?php
class DB{
	public function conectar(){
			$host="localhost";
			$user="root";
			$pass="";
			$dbname="estudar";
			
			$conexao = new mysqli($host, $user, $pass, $dbname);
			if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
			
			mysqli_set_charset($conexao,"utf8");
			
			return $conexao;
	}
}
?>