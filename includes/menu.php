<?php
if(isset($_SESSION["nivel"])){
	$nivel=$_SESSION["nivel"];
	if($nivel == 2 || $nivel == 3){?>

	<ul>
		<li><a href="escolher_materia.php" title="Escolha sua Materia">Materias</a></li>
		<?php if($nivel == 3){?><li><a href="estudar.php" title="Estudar">Estudar</a></li>
		<li><a href="cadastrar_pergunta.php" title="Cria nova pergunta">Criar Nova Pergunta</a></li><?php }?>
		<li><a href="index.php?acao=logout" title="Sair do sistema!">Sair</a></li>
	</ul>
	<?php }
}?>