
<?php # Verifica se foi enviado algum ID
	if (!isset($_GET["id"])) { // Novo registro
		$idpessoa = 0;
		$titulo = "Cadastro de uma nova pessoa";
    $nome = $senha = $email = "";
	} else { // Alteração de registro
		$idpessoa = $_GET["id"]; 
		include_once("pessoa.php");
		$pessoa = retornaPessoaPorId($idpessoa);
		if ($pessoa != null) { // Verifica se retornou um registro
            $titulo = "Atualização dos dados da pessoa";
            $nome = $pessoa["nome"];
            $email = $pessoa["email"];
            $senha = $pessoa["senha"];
          }
      }
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
        <div class="tela-cadastro">
            <div class="alinha">
                <img class="logo" src="images/IFSULDEMINAS_vertical.png" alt="logo">
            </div>

            <form method="post">
                <div class="label-float">
                    <input type="name" id="nome" required>
                    <label for="nome" id="label-nome">Nome:</label>
                </div>
    
                <div class="label-float">
                    <input type="email" id="email" placeholder="" required>
                    <label for="email" id="label-email">E-mail:</label>
                </div>
                
                <div class="label-float">
                    <input type="password" id="senha" placeholder="" required>
                    <label for="senha" id="label-senha">Senha:</label>
                    <i class="fa fa-eye fa-lg" onclick="mostrar()"></i>
                </div>
    
                <div class="label-float">
                    <input type="password" id="confsenha" placeholder="" required>
                    <label for="senha" id="label-confsenha">Confirmar Senha:</label>
                    <i class="fa fa-eye fa-lg" onclick="mostrarConf()"></i>
                </div>
    
                <div class="alinha">
                    <a><button class="botao-login" onclick='cadastro()' type="submit">Cadastrar</button></a>
                    <a href="index.html"><button class="botao-sair">Cancelar</button></a>
                </div> 
            </form>        
            

        </div>
    </div>
</body>

<!-- JavaScript -->
<script src="js/cadastro.js"></script>

</html>