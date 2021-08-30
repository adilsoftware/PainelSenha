<?php
$us = $_GET["usuario"];

$servidor = "pdb41.awardspace.net";
$usuario = "";
$senha = "";
$dbname = "";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
$query = "select * from tbusuario where usuario = {$us}";
$resultados = mysqli_query($conexao,$query);
while($dados=mysqli_fetch_array($resultados)) {
$cliente = $dados["id"];///////senha
$nome = $dados["nome"];///////senha
$foto = $dados["foto"];///////senha

if ($cliente>0):
    session_start();
    $_SESSION['usuario']=$us;
    $_SESSION['nome']=$nome;
    $_SESSION['foto']=$foto;    
    echo "Identificação já existente";
endif;
}


mysqli_close($conexao);
?>
