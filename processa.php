<?php

$_POST['bike'] = ( isset($_POST['bike']) ) ? true : null;
 
$bike = ($_POST['bike']);


if ($bike ==1) 
{
    $bike = "checked";
}else
{
    $bike = "null";
}


	include_once("conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$item = mysqli_real_escape_string($conn, $_POST['item']);
	$detalhes = mysqli_real_escape_string($conn, $_POST['valor']);
	$unidade = mysqli_real_escape_string($conn, $_POST['unidade']);
	$divulgar = mysqli_real_escape_string($conn, $_POST['divulgar']);
	echo "$id - $item - $detalhes";
	$result_cursos = "UPDATE painel SET item='$item', valor='$detalhes', unidade='$unidade', divulgar='$bike' WHERE id = '$id'";
	
	$resultado_cursos = mysqli_query($conn, $result_cursos);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=page4.html'>
				
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=page4.html'>
				
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>