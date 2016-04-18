<?php
	$page="Estudar";
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
			
			$a=0;
			$cod_pergunta="0";

			$codUsuario= mysqli_query($conexao, "SELECT cod_usuario FROM usuario WHERE username='$usuario' or cod_usuario='$usuario'");
			$array = mysqli_fetch_assoc($codUsuario);
			$usuariocod = implode("",$array);
			
			$materiaEstudando= mysqli_query($conexao, "SELECT estudando_materia FROM usuario WHERE username='$usuario' or cod_usuario='$usuariocod'");
			$array = mysqli_fetch_assoc($materiaEstudando);
			$MateriaE = implode("",$array);
			
			$totalPergunta= mysqli_query($conexao, "SELECT * FROM perguntas WHERE perguntas.cod_materia='$MateriaE'");
			$totalP =  mysqli_num_rows($totalPergunta);
			$totalRespondidas= mysqli_query($conexao, "SELECT * FROM pontuacao WHERE cod_usuario='$usuariocod' and cod_materia='$MateriaE'");
			$totalR =  mysqli_num_rows($totalRespondidas);
			
			$nomeMateria= mysqli_query($conexao, "SELECT nome_materia FROM materias WHERE cod_materia='$MateriaE'");
			$array = mysqli_fetch_assoc($nomeMateria);
			$NomeMat = implode("",$array);
			
			$nomeUser= mysqli_query($conexao, "SELECT username FROM usuario WHERE username='$usuario' or cod_usuario='$usuario'");
			$array = mysqli_fetch_assoc($nomeUser);
			$usuario = implode("",$array);
		
		if($totalP==0){
			echo "<center>Em breve perguntas de ".$NomeMat."</center>";
		}else{
			
			if($totalP==$totalR){
			$totalPontos= mysqli_query($conexao, "SELECT SUM(pontos) FROM pontuacao WHERE cod_usuario='$usuariocod' AND cod_materia='$MateriaE'");
			$array = mysqli_fetch_assoc($totalPontos);
			$Totalpontos = implode("",$array);
			//inserção no banco de dados
			$insertPontos = mysqli_query($conexao,"INSERT INTO total_pontos (materia, max_pontos, usuario, data) VALUES ($MateriaE, $Totalpontos, $usuariocod, NOW())");
			?>
			<center><h2><?php echo "Nota em $NomeMat<br><div class='pontos'>$Totalpontos</div>";?></h2></center>
				<form action="estudar.php?acao=zerar_Pontos" method="post" name="zerar">
					<input type="text" name="materia" id="materia" value="<?php echo $MateriaE;?>" hidden>
					<input type="text" name="usuario" id="usuario" value="<?php echo $usuariocod;?>" hidden>
					<input type="text" name="pontos" id="pontos" value="<?php echo $Totalpontos;?>" hidden>
				<div id="EstudarNovamente"><input class="sb bradius" type="submit" value="Estudar Novamente"></div>
				</form>
			<?php
		}else
		{
	?>
<div class="pergunta">
	<?php
		while($a==0){	
			$buscarpergunta= mysqli_query($conexao, "SELECT cod_perguntas FROM perguntas WHERE cod_materia='$MateriaE' order by rand() LIMIT 1");
			$array = mysqli_fetch_assoc($buscarpergunta);
			$cod_perguntas = implode("",$array);

			$analisar= mysqli_query($conexao, "SELECT cod_pergunta FROM pontuacao WHERE cod_usuario='$usuariocod' AND cod_pergunta='$cod_perguntas'");
			$totalAnalise =  mysqli_num_rows($analisar);
			if($totalAnalise == 1){
				continue;
				
			}else{
				$a=1;
			}
		}
		
		$buscarpergunta= mysqli_query($conexao, "SELECT * FROM perguntas INNER JOIN usuario on perguntas.cod_usuario=usuario.cod_usuario WHERE cod_perguntas='$cod_perguntas' LIMIT 1");
		$contar =  mysqli_num_rows($buscarpergunta);
		if($contar <> 0){
			while($pergunta=mysqli_fetch_array($buscarpergunta,MYSQLI_BOTH)){
				$cod_perguntas=$pergunta["cod_perguntas"];
				$materia=$pergunta["cod_materia"];
				$postado=$pergunta["nome"];
				$pergunta=$pergunta["pergunta"];
	?>
	
	<tr>
		<td><h2><?php echo htmlentities($pergunta)."<br><h6>enviado por: $postado</h6>";?></h2></td><br><br>
		
	</tr>
</div>
	<form action="estudar.php?acao=responder" method="post" name="enviar"><br>
	<div id="resultadoC">CERTO</div>
	<div id="resultadoE">ERRADO</div>
	<?php 
		//var_dump($a);
		//var_dump($cod_perguntas);
		//var_dump($cod_pergunta);
	}
		$buscaralternativas= mysqli_query($conexao, "SELECT * FROM alternativas WHERE cod_perguntas='$cod_perguntas' order by rand()");
		$i = 1;
		$j = 1;
		$k = 1;
		$nameText = 1;
		$idText = 1;
			while($alternativas=mysqli_fetch_array($buscaralternativas,MYSQLI_BOTH)){
				$cod_alternativa=$alternativas["cod_alternativa"];
				$resposta=$alternativas["resposta"];
				$alternativa=$alternativas["alternativa"];
	?>
	<div class="resposta" id="Resposta<?php echo $i++;?>" onclick="Opcao<?php echo $j++;?>()" onMouseOver="muda()">
		<tr>
			<td>
				<h5><div class="radio"><input type="radio" name="alternativa" id="radio<?php echo $k++;?>" value="<?php echo $resposta;?>"></div><?php echo htmlentities($alternativa);?></h5>
			</td><br>
		</tr>
</div>
	<?php
		}}
	?>
		<input type="text" name="nameText<?php echo $nameText++;?>" id="idText<?php echo $idText++;?>" value="<?php echo $cod_perguntas;?>"hidden>
		<input type="text" name="nameText<?php echo $nameText++;?>" id="idText<?php echo $idText++;?>" value="<?php echo $usuario;?>" hidden>
		<input type="text" name="materia" id="materia" value="<?php echo $materia;?>" hidden>
		<div id="btNova"><input class="sb bradius" type="submit" value="Nova Pergunta"></div>
	</form>
	</table>
		<?php mysqli_close($conexao);
		}	
			
		}	
		include("includes/fim.php");
		}?>
		
</div>		
</body>
</html>		