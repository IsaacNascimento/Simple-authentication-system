<html>
    <head>
        <title>Login Maple</title>
      
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">

    </head>
<body>

<div class="container" id="container">
	<div class="form-container sign-in-container">
       <form action="enviar.php" id="formlogin" method="post" name="formlogin">    
      
<h1>Entre para continuar!</h1>
<br>
<input placeholder="Matricula" type="password" name="matricula" id="matricula">

<input placeholder="Senha" type="password" name="senha" id="senha">
<br>
<?php
    if (isset($_GET['erro'])) {
        if($_GET['erro'] == 1){
            echo '
            <div class="erro-msg" style="color:#c00000">
                <p> Dados Incorretos! </p>
            </div>
            ';
        } else if ($_GET['erro'] == 2) {
            echo '
            <div class="erro-msg" style="color:#c00000">
            <p> Você não está logado!</p>
              </div>';
            
        }
        
    }
?>
<button
type="submit" value="Entrar">Entrar
</button>
</form>
<footer>
<p>
Copyright © 2021 | Desenvolvido pela Agência 
<a 
href="#"> Triplus
</a>

</p>
</footer>

</body>
</html>-




