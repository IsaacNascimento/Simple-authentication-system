<html>
<head><title>Site</title></head>
<body>

<?php
session_start();
if(!(isset($_SESSION['user_id']))){
    session_destroy();
    header("Location: index.php?erro=2");

  
  } 
?>
  <?php
if($_SESSION['user_id']) {
?>
Bem vindo <?php/* echo ($_SESSION['user_id']);*/ ?>. clique aqui para  <a href="logout.php" tite="Logout"> Sair.
<?php
}else echo "<h1>Please login first .</h1>";
?>
       





</body>
</html>