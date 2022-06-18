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

 function retornaCurso() {
	$sql = "SELECT * FROM cursos ORDER BY nome";
	$conexao = abreConexao(); # Abre a conexão com o BD
	$resultado = $conexao->query($sql);
	$conexao->close(); // Fecha a conexão com o BD
	if (mysqli_num_rows($resultado) > 0) {
		 while ($row = mysqli_fetch_array($resultado)) {
			  $curso[] = $row;
		 }
		 return $curso;
	} else {
		 return null;
	} }

?>