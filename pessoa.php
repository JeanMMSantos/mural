<?php

include_once("conecta.php"); // Inclui a classe conecta

function validaUsuario($email, $senha) {
    $sql = "SELECT * FROM usuarios WHERE email = '".$email."' AND senha = '".$senha."';";
    $conexao = abreConexao(); // Abre a conexão com o BD
    $resultado = $conexao->query($sql);
    $conexao->close(); // Fecha a conexão com o BD
    if (mysqli_num_rows($resultado) > 0) {
         $pessoa = mysqli_fetch_array($resultado);
         return $pessoa;
    } else {
         return null;
    } 
}

function inserePessoa($nome, $senha, $email) {
     echo "Aqui insere";
     // Define o comando SQL  (insert)
     $sql = "INSERT INTO usuarios(nome, email, senha) 
         VALUES('$nome', '$email', '$senha')";
     $conexao = abreConexao(); // Abre a conexão com o BD
     $conexao->query($sql); // Executa o comando SQL
     $conexao->close(); 	// Fecha a conexão com o BD
 }

?>