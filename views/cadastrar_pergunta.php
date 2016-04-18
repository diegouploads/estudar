<?php
	$page="Nova Pergunta";
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
	?>
<div class="cadastrar">
	<form action="cadastrar_pergunta.php?acao=cadastrarPergunta" method="post" name="enviar" ><br>
		<label>Pergunta</label><br>
		<textarea rows="5" cols="80%" name="pergunta" id="pergunta" value="" maxlength="300"></textarea><br>
		<label>Alternativa A</label><br>
		<textarea rows="5" cols="80%" name="alternativaA" class="alternativa" maxlength="300"></textarea><br>
		<label>Alternativa B</label><br>
		<textarea rows="5" cols="80%" name="alternativaB" class="alternativa" maxlength="300"></textarea><br>
		<label>Alternativa C</label><br>
		<textarea rows="5" cols="80%" name="alternativaC" class="alternativa" maxlength="300"></textarea><br>
		<input type="text" name="usuario" id="usuario" value="<?php echo $usuario; ?>" hidden></textarea><br>
		Resposta Correta<br>
		<input type="radio" name="certa" id="3" value="3" hidden checked>
		<input type="radio" name="certa" id="A" value="A"> A  -
		<input type="radio" name="certa" id="B" value="B"> B  -
		<input type="radio" name="certa" id="C" value="C"> C<br><br>
		Materia<br>
		<input type="radio" name="materia" id="materia" value="0" hidden checked>
		<?php
							
			$conectar=new DB;
			$conexao=$conectar->conectar();
			
			$sql = mysqli_query($conexao, "SELECT * FROM materias");
			while($row=mysqli_fetch_array($sql)){
				$cod=$row['cod_materia'];
				$nome=$row['nome_materia'];
			//echo '<option value="'.$cod.'">'.$nome.'</option>';
			echo '<input type="radio" name="materia" class="materias" value="'.$cod.'">'.'  '.$nome.'<br>';
			}
		?>
		<input type="submit" class="sb bradius" value="Enviar"/>
	</form>
</div>
		<?php 
		include("includes/fim.php");
		} ?>
</div> 
</body>
</html>