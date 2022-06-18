<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>

    <!-- Link to CSS -->
    <link rel="stylesheet" href="css/style-login.css">
</head>

<body>
    <div class="back-login">
        <div class="tela-cadastro">
            <div class="alinha">
                <img class="logo" src="images/IFSULDEMINAS_vertical.png" alt="logo">
            </div>

            <form action="cadastroAut.php" method="POST">
                <div class="label-float">
                    <input type="text" name="nome" id="nome" required>
                    <label for="nome" id="label-nome">Nome do Curso:</label>
                </div>

                <div class="label-float">
                    <input type="text" name="curso" id="curso" placeholder="" required>
                    <label for="link" id="label-link">Link Para o Curso:</label>
                </div>

                <div class="label-float" style="display:flex">
                    <label for="tipo" id="label-curso">Escolha o Tipo do Curso:</label>
                    <select name="tipo" id="tipo" style="font-size: 1.2rem; position:absolute; right:2rem; top:0.7rem; width: 30%">
                        <option value="1">FrontEnd</option>
                        <option value="2">BackEnd</option>
                        <option value="3">Dados</option>
                        <option value="4">Outros</option>
                    </select>
                </div>

                <div class="alinha">
                    <a><button class="botao-login" onclick='cadastro()' type="submit">Cadastrar</button></a>
                </div>
            </form>
            <div class="alinha">
                <a href="index.html"><button class="botao-sair">Cancelar</button></a>
            </div>
        </div>
    </div>

</body>

</html>