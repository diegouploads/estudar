<?php
if(isset($_SESSION["nivel"])){
	$nivel=$_SESSION["nivel"];
	if($nivel == 2){?>
	
	<div class="logado">
		<?php echo "<br><h5><center>Logado como $usuario<center></h5>"; ?>
	</div>

	<?php }
}?>