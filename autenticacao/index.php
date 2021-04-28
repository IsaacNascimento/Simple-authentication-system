
<html>
<head><title>Login Maple</title></head>
<body>
<form action="enviar.php" id="formlogin" method="post"
name="formlogin">
<fieldset id="fie">
Faça seu login para continuar
<br>
<?php
    if (isset($_GET['erro'])) {
        if($_GET['erro'] == 1){
            echo '
            <div class="erro-msg" style="color: #fff;background:red;border: 1px solid #ccc">
                <p> Dados Incorretos! </p>
            </div>
            ';
        } else if ($_GET['erro'] == 2) {
            echo '
            <div class="erro-msg" style="color: #fff;background:red;border: 1px solid #ccc">
            <p> Você não está logado!</p>
              </div>';
            
        }
        
    }
?>
Mátricula: <input type="password" name="matricula" id="matricula">
<br>
Senha: <input type="password" name="senha" id="senha">
<br>

<input type="submit" value="OK!">
</form>
</body>
</html>

<?php

/*$conn = new PDO ("mysql:host=localhost;dbname=teste","root","Creative12");
$query = "SELECT * FROM pessoa";
$ret =  ($conn->query($query));
$pessoa = $ret->fetchAll(\PDO::FETCH_BOTH);
print_r($pessoa);*/

