<?php
    include_once("conecta.php");
    
    if (isset($_POST["email"]) || isset($_POST["senha"])) {
		if(strlen($_POST["email"]) == 0){
            echo "Preencha seu email";
        }
        else if(strlen(isset($_POST["senha"])) == 0){
            echo "Preencha sua Senha";
        }
        else{
            $email = $mysqli->real_escape_string($_POST["email"]);
            $senha = $mysqli->real_escape_string($_POST["senha"]);

            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
            $sql_query = $mysqli->query($sql_code) or die("Falha na Execução do código SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1){

                $usuario = $sql_querry -> fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION["id"] = $usuario["id"];
                $_SESSION["nome"] = $usuario["nome"];

                header("Locarion: painel.php");

            }
            else{
                echo "Falha ao logar, E-mail ou Senha Incorretos";
            }
        }
    $nome = $senha = $email = "";
	} 
    /* else { // Alteração de registro
		$idpessoa = $_GET['id']; 
		include_once("pessoa.php");
		$pessoa = retornaPessoaPorId($idpessoa);
		if ($pessoa != null) { // Verifica se retornou um registro
            $titulo = "Atualização dos dados da pessoa";
            $nome = $pessoa["nome"];
            $email = $pessoa["email"];
            $senha = $pessoa["senha"];
        }
    } */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Link to CSS -->
    <link rel="stylesheet" href="css/style-login.css">

    <!-- Link to FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="back-login">
        <div class="tela-login">
            <div class="alinha">
                <img class="logo" src="images/IFSULDEMINAS_vertical.png" alt="logo">
            </div>
            <form action="autentica.php" method="POST">
            <div class="label-float">
                <input type="email" id="email" placeholder="" required>
                <label for="email" id="label-email">E-mail:</label>
            </div>
            
            <div class="label-float">
                <input type="password" id="senha" placeholder="" required>
                <label for="senha" id="label-senha">Senha:</label>
                <i class="fa fa-eye fa-lg" onclick="mostrar()"></i>
            </div>

            <div class="alinha">
                <a><button class="botao-login" type="submit">Entrar</button></a>
                <a href="index.html"><button class="botao-sair">Voltar</button></a>
            </div>
            </form>
            

            <p class="contato">Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>            
            

        </div>
    </div>
</body>

    <!-- JavaScript -->
    <script src="js/login.js"></script>

</html>