<?php
//Proteje contra acesso GET
if(!(isset($_POST['matricula']))){ //Se o usuário não estiver conectado, será direcionado para a página de login
  header("Location: index.php");   //caso ele esteja conectado, automaticamente será conectado para a página desejada.
}
// Referênciando o banco de dados... 
$servername = "localhost";  // Nome do servidor
$username = "root";     // Nome do usuario
$password = "";        // Senha
$dbname = "server";    // Nome do bando de dados

$matricula = addslashes($_POST['matricula']); // tratando o dado via post, para evitar sqlinjection
$senha = sha1($_POST['senha']);    // tratando o dado senha, o criptografando

// Variavel que rcebe os valores conectados no bando de dados
$conn = new mysqli($servername, $username, $password, $dbname);  
 
// Check connection   
// Condição, na qual verifica se a conexão aconteceu de fato. Caso não, ele retorna um erro. Mas caso dê certo
// ele prossegue 
if ($conn->connect_error) {       
  die("Connection failed: " . $conn->connect_error);   
}

// Variavel seleciona dados da tabela "usuario", onde "matricula é igual a "matricula" e "senha" é igual a "senha", pos
// ele quer se conectar a dados existentes na tabela. Dados inexistentes não interessam a variavel "$sql"

// LIMIT 1 é para selecionar apenas um "usuario" e impedir que dois usuarios selecionadas se conectem em um mesmo login
$sql = "SELECT * FROM usuario WHERE matricula = '$matricula' AND senha = '$senha' LIMIT 1";

// Variavel result recebe a conexão do bando de dados e seleciona os dados chamados da tabela do bd.
$result = $conn->query($sql);

// Condição que conta o número de linhas da variavel result. E se o número de linhas for maior que 0, ele prossegue
if (mysqli_num_rows($result) > 0) {

// variavel resultado se transforma em array para receber os dados do bando de dados. Isso é necessário para se poder 
// manipular mais tarde para algum tipo de objetivo.  
  $result = $result->fetch_assoc();

  session_start(); // Inicia a sessão

  $_SESSION['user_id'] = $result['id_user']; //Cria uma super sessão, aonde, sendo user_id da tabela do bd igual a inserida
                                             //a conexão continua. E ele armazena esse login.

  header("Location: jk.php");  //Com a autenticação válida, ele o direciona para o arquivo site.php     

} else {     //Se a atenticação estiver errada 
  header("Location: index.php?erro=1");  // Ele o te direciona novamente para index.php com uma mensagem de erro especifica
                                        // de $erro=1

  //echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
