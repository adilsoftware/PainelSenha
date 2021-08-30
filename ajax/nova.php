<?php
$nova = $_GET['valor1'];

$servidor = "pdb41.awardspace.net";
$usuario = "";
$senha = "";
$dbname = "";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

	
$result_cursos = "UPDATE tbsenha SET senha='$nova' WHERE id = '1'";	
$resultado_cursos = mysqli_query($conexao, $result_cursos);
mysqli_close($conexao);

?>
