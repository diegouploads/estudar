<?php
	$page="Escolher";
	include("header.php");
?>
<div id="menu">
			<?php
                include("includes/menu.php");
            ?>
</div>
<div id="principal">
	<?php
		if($nivel == 2 || $nivel == 3){
			$conectar=new DB;
			$conexao=$conectar->conectar();
	?>
	<form action="estudar.php?acao=escolhaMateria" method="post" name="escolherMateria"><br>
	<?php
	$i=1;
		$buscarMaterias= mysqli_query($conexao, "SELECT * FROM materias");
		while($materias=mysqli_fetch_array($buscarMaterias,MYSQLI_BOTH)){
			$cod_materia=$materias["cod_materia"];
			$nome_materia=$materias["nome_materia"];

			$codUsuario= mysqli_query($conexao, "SELECT cod_usuario FROM usuario WHERE username='$usuario' or cod_usuario='$usuario'");
			$array = mysqli_fetch_assoc($codUsuario);
			$usuario = implode("",$array);

			$pontoss= mysqli_query($conexao, "Select Max(max_pontos) from total_pontos WHERE usuario=$usuario AND materia=$cod_materia");
			$array = mysqli_fetch_assoc($pontoss);
			$totalPontos = implode("",$array);
			
	?>
	<div class="materia" id="materia<?php echo $i++;?>" onclick="document.getElementById('cod<?php echo $cod_materia;?>').checked=true; document.escolherMateria.submit();">
		<tr>
			<td>
				<h3><div class="radio"><input type="radio" name="materia" id="cod<?php echo $cod_materia;?>" value="<?php echo $cod_materia;?>"></div>
				<?php 
					echo $nome_materia;
					if($totalPontos<>NULL)
					{
						echo"<br><h4 style='color:#AA0000;'}>Sua Maior Nota = ".$totalPontos."</h4>";
					}
				?>
				</h3>
			</td>
		</tr>
		<?php
		$buscaNotas= mysqli_query($conexao, "SELECT * FROM total_pontos WHERE materia='$cod_materia'");
		$temNota =  mysqli_num_rows($buscaNotas);
		if($temNota != 0){
		?>
		<h6 style='color:#607D8B;'}>Melhores Notas<br>
		<?php 
			$buscarMelhores= mysqli_query($conexao, "SELECT DISTINCT * FROM total_pontos inner join usuario on total_pontos.usuario=usuario.cod_usuario where materia=$cod_materia ORDER BY max_pontos DESC LIMIT 3");
			while($top3=mysqli_fetch_array($buscarMelhores,MYSQLI_BOTH)){
				$nota=$top3["max_pontos"];
				$nomeMelhor=$top3["nome"];
				
				echo "$nomeMelhor = $nota<br>";
			}
		}
		?></h6>
</div>
<?php
		}
		$UserString= mysqli_query($conexao, "SELECT username FROM usuario WHERE username='$usuario' or cod_usuario='$usuario'");
		$array = mysqli_fetch_assoc($UserString);
		$usuario = implode("",$array);
	?>
		<input type="text" name="usuario" id="usuario" value="<?php echo $usuario;?>" hidden>
	</form>
	</table>
		<?php mysqli_close($conexao);		
		include("includes/fim.php");
		}
		?>
		
</div>		
</body>
</html>