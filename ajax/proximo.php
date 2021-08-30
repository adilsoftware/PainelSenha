<?php
$servidor = "pdb41.awardspace.net";
$usuario = "";
$senha = "";
$dbname = "";

$conexao2 = mysqli_connect($servidor, $usuario, $senha, $dbname);
$query2 = "select * from senhaqrcode where id = 1";
$resultados2 = mysqli_query($conexao2,$query2);
while($dados2=mysqli_fetch_array($resultados2)) {
$senhaqrcode = $dados2["senha"];///////senha
}





$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
$query = "select senha from tbsenha where id = 1";
$resultados = mysqli_query($conexao,$query);
while($dados=mysqli_fetch_array($resultados)) {
$senha = $dados["senha"];///////senha
$proxima = $senha+1;
}



if ($proxima<=$senhaqrcode):
$result_cursos = "UPDATE tbsenha SET senha='$proxima' WHERE id = '1'";	
$resultado_cursos = mysqli_query($conexao, $result_cursos);
endif;

mysqli_close($conexao);
?>
