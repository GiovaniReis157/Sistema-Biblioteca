<?php
	include '../conecta.php';

	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$editora= $_POST['editora'];
	$paginas = $_POST['paginas'];
	$exmp = $_POST['exmp'];
	$genero = $_POST['select'];

	$consulta = $conexao -> prepare("INSERT INTO livros (titulo,autor,genero,editora,paginas,qtdeExemplares) VALUES ('$titulo','$autor','$genero','$editora','$paginas','$exmp')");

	$consulta -> execute();

	header('Location: index.php');
?>
