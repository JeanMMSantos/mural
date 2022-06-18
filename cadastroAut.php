<?php
    include_once("pessoa.php");
        
    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $confemail = $_POST["confsenha"];

    inserePessoa($nome, $senha, $email);
?>
    <meta http-equiv="refresh" content="0; URL='login.php?mensagem=ui'"/>
<?php
    

    /* if($logins == null){ 
        $_SESSION['login'] = false; ?>
    
        <meta http-equiv="refresh" content="0; URL='cadastro.php?mensagem=ui'"/>

    <?php }else{  
        $_SESSION['login'] = true;
    ?>
        <meta http-equiv="refresh" content="0; URL='login.php'"/>
    <?php    }
    exit(1);   */

?>