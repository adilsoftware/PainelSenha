<?php
session_start();

$estabelecimento = $_GET["nome"];


$servidor = "pdb41.awardspace.net";
$usuario = "3639130_adilsoftware";
$senha = "ad81guilherme";
$dbname = "3639130_adilsoftware";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
$query = "select * from senhaqrcode where estabelecimento = {$estabelecimento}";
$resultados = mysqli_query($conexao,$query);
while($dados=mysqli_fetch_array($resultados)) {
$ultimasenha = $dados["senha"];///////senha
$novasenha = $ultimasenha+1;
//echo $novasenha;
}

$result_cursos = "UPDATE senhaqrcode SET senha='$novasenha' WHERE estabelecimento = {$estabelecimento}";	
$resultado_cursos = mysqli_query($conexao, $result_cursos);

$_SESSION['estabelecimento']=$estabelecimento;
$_SESSION['novasenha']=$novasenha;
    
mysqli_close($conexao);

header("location:http://adilpainel.atwebpages.com/cliente.html","_self")

?>