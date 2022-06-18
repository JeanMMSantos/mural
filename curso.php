<?php

include_once("conecta.php"); // Inclui a classe conecta


function insereCurso($nome, $curso, $tipo) {
     echo "Aqui insere";
     // Define o comando SQL  (insert)
     $sql = "INSERT INTO cursos(nome, curso, tipo) 
         VALUES('$nome', '$curso', '$tipo')";
     $conexao = abreConexao(); // Abre a conexão com o BD
     $conexao->query($sql); // Executa o comando SQL
     $conexao->close(); 	// Fecha a conexão com o BD
 }

?>