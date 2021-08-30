<?php

$item = $_POST["item"];
$valor = $_POST["valor"];
$unidade = $_POST["unidade"];



$_POST['divulgar'] = ( isset($_POST['divulgar']) ) ? true : null;
 
$chekbox = ($_POST['divulgar']);

if ($chekbox ==1) 
{
    $chekbox = "0";
}else
{
    $chekbox = "1";
}


$servidor = "pdb41.awardspace.net";
$usuario = "3639130_adilsoftware";
$senha = "ad81guilherme";
$dbname = "3639130_adilsoftware";
 

    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
    $query = "select max(id) as maior from painel";
    $resultados = mysqli_query($conexao,$query);
    while($dados=mysqli_fetch_array($resultados)) {
    $maiorID = $dados["maior"];///////maior id do banco
    }
 $id = $maiorID+1;
#connection string
$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

     
     #retrieve file title
        $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'upload';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $imagem = "upload/".$pname;
    $sql = "INSERT into painel(id, item, valor, imagem, divulgar, unidade) VALUES('$id', '$item', '$valor', '$imagem', '$chekbox', '$unidade')";
 
    if(mysqli_query($conn,$sql)){
 
    header("location:page4.html");

    }
    else{
        echo "Error";
    }
?>
