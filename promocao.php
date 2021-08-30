<?php

$id = $_GET['id'];
$promocao = $_GET['promocao'];



if($_GET['promocao']==1)  {
$valor=0;
}   else {
$valor=1;
} 


$servidor = "pdb41.awardspace.net";
$usuario = "";
$senha = "";
$dbname = "";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

	
        $result_cursos = "UPDATE painel SET divulgar = $valor WHERE id = $id";	
$resultado_cursos = mysqli_query($conexao, $result_cursos);

mysqli_close($conexao);

header("location:page4.html")



?>
