<?php
	$page="Login";
	include("header.php");
?>
    <div id="login" class="form bradius">
        <div class="message bradius"><?php echo $msg;?></div>
        <!--<div class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img src="css/imagens/logoimage.jpg" alt="<?php echo $title; ?>" title="" width="200" height="200"/></a></div>.-->	
        <div class="acomodar">
            <form action="index.php?acao=logar" method="post">
                <label for="email">E-mail</label><input id="email" type="email " class="txt bradius" name="email" size="31" value=""/>
                <label for="senha">Senha</label><input id="senha" type="password" class="txt bradius" name="senha" size="31" value=""/>
                <input type="submit" class="sb bradius" value="Entrar"/>
                <div id="cadastrar"><a href="cadastro.php" title="Cadastre para ter acesso!">Cadastre-se</a></div>
            </form>
        </div>	
    </div>				
</body>
</html>