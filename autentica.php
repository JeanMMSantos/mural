<?php
    session_start();   
    include_once("pessoa.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $logins = validaUsuario($email, $senha);

    if($logins == null){ 
        $_SESSION['login'] = false; ?>
    
        <meta http-equiv="refresh" content="0; URL='login.php?mensagem=ui'"/>

    <?php }else{  
        $_SESSION['login'] = true;
    ?>
        <meta http-equiv="refresh" content="0; URL='painel.php'"/>
    <?php    }
    exit(1);  

?>