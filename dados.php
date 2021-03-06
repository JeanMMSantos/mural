<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural</title>

    <!-- JavaScript -->
    <script src="code.js"></script>

    <!-- Link to CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Link to FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header>
        <a class="logo">MURAL IF</a>
        <nav>
            <ul id="menu">
                <li><a href="index.html">Principal</a></li>
                <li><a href="frontend.php">FrontEnd</a></li>
                <li><a href="backend.php">BackEnd</a></li>
                <li><a href="dados.php">Dados</a></li>
                <li><a href="outros.php">Outros</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="principal">
            <h1>CURSOS SOBRE DADOS</h1>
            <p class="paragrafo-principal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            <div>
                <?php include_once("curso.php");
                $vetcursos = retornaCurso();
                if ($vetcursos != null) {
                    foreach ($vetcursos as $cursos) {
                        $nome = $cursos['nome'];
                        $link = $cursos['curso'];
                        $id = $cursos['id'];
                        $tipo = $cursos['tipo'];
                        if ($tipo == 3)
                            echo ($nome . ": " . $link . "<br><br>");
                    } // fecha foreach
                } // fecha if
                else {
                    echo ("Nenhum registro encontrado!");
                }
                ?>
            </div>
        </div>
        
    </main>
    
    <footer>   
        <div class="rodape">
            <h3>Contato:</h3>
            <a href="https://www.instagram.com/accounts/login/?next=/ifsuldeminascampuspassos/"><i class="fa fa-instagram" style="font-size:24px"></i></a>
            <a href="https://pt-br.facebook.com/campuspassos/"><i class="fa fa-facebook" style="font-size:24px"></i></a>
            <a href="mailto:administrador@xilique.com"><i class="fa fa-envelope" style="font-size:24px"></i></a>
            <p>Jean Santos ??2022</p>
        </div>        
    </footer>
</body>
</html>