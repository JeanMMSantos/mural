<?php
    include_once("curso.php");
        
    $nome = $_POST["nome"];
    $curso = $_POST["curso"];
    $tipo = $_POST["tipo"];

    insereCurso($nome, $curso, $tipo);
?>
    <meta http-equiv="refresh" content="0; URL='painel.php?mensagem=ui'"/>
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