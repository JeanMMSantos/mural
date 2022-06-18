<?php
    session_start();   
    include_once("pessoa.php");

    $user = $_POST["email"];
    $pass = $_POST["senha"];

    $logins = validaUsuario($user, $pass);

    if($logins == null){ 
        $_SESSION['login'] = false; ?>
    
        <meta http-equiv="refresh" content="0; URL='index.php?mensagem=ui'"/>
    <?php }else{  
        $_SESSION['login'] = true;
    ?>
        <meta http-equiv="refresh" content="0; URL='home.php'"/>
    <?php    }
    exit(1);  

?>