<?php
	$page="Cadastro Usuario";
	include("header.php");
?>
	<div id="login" class="form bradius" style="top: 50px;">
        <div class="message bradius"><?php echo $msg;?></div>
        <!--<div class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img src="css/imagens/logoimage.jpg" alt="<?php echo $title;?>" title="<?php echo $title;?>" width="200" height="200"/></a></div>-->
        <div class="acomodar">
            <form action="cadastro.php?acao=cadastrar" method="post">
            	<label for="nome">Nome:</label><input id="nome" type="text" class="txt bradius" size="31" name="nome"/>
                <label for="email">E-mail:</label><input id="email" type="text" class="txt bradius" size="31" name="email"/>
				<label for="usuario">Usuario:</label><input id="usuario" type="text" class="txt bradius" size="31" name="usuario"/>
                <label for="senha">Senha:</label><input id="senha" type="password" class="txt bradius" size="31" name="senha"/>
                <input type="submit" class="sb bradius" value="Cadastrar"/>
                <div id="cadastrar"><a href="index.php" title="Faça login!">Login</a></div>
            </form>
            <!--acomodar-->
        </div>
        <!--login-->	
	</div>
</body>
</html>