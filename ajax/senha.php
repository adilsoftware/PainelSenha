<?php
$servidor = "pdb41.awardspace.net";
$usuario = "3639130_adilsoftware";
$senha = "ad81guilherme";
$dbname = "3639130_adilsoftware";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
$query = "select senha from tbsenha where id = 1";
$resultados = mysqli_query($conexao,$query);
while($dados=mysqli_fetch_array($resultados)) {
$senha = $dados["senha"];///////senha
echo $senha;
}
mysqli_close($conexao);
?>