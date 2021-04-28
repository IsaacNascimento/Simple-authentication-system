<?php
    session_start();
    $_SESSION = array('user_id');
    session_destroy();
    /*unset($_SESSION["matricula"]);
    unset($_SESSION["senha"]);*/
    
    
    /*session_destroy($_SESSION['user_id']);*/

    header("Location: /maple/");


?>