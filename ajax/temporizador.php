<?php
session_start();

$servidor = "pdb41.awardspace.net";
$usuario = "";
$senha = "";
$dbname = "";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
$query = "select min(id) as menor from painel";
$resultados = mysqli_query($conexao,$query);
while($dados=mysqli_fetch_array($resultados)) {
$menorIDimg = $dados["menor"];///////menor id do banco
}


$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
$query = "select max(id) as maior from painel";
$resultados = mysqli_query($conexao,$query);
while($dados=mysqli_fetch_array($resultados)) {
$maiorIDimg = $dados["maior"];///////maior id do banco
}


$inicioimg = $_SESSION['inicio2']++; 
if($inicioimg==$maiorIDimg)://///informar a ultima pagina da lista
    unset( $_SESSION['inicio2'] );
    $_SESSION['inicio2']=$menorIDimg;
endif;

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
$query = "select * from painel where id between '$inicioimg' and '$inicioimg' order by  id";
$resultados = mysqli_query($conexao,$query);

while($dadosimg=mysqli_fetch_array($resultados)) {
    $imagemimg = $dadosimg["imagem"];
    $nomeimg = $dadosimg["item"];
    $valorimg = $dadosimg["valor"];
    $unidadeimg = $dadosimg["unidade"];
}

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
$query = "select max(id) as maior from painel";
$resultados = mysqli_query($conexao,$query);
while($dados=mysqli_fetch_array($resultados)) {
$maiorID = $dados["maior"];///////maior id do banco
}

$r = $maiorID-fmod($maiorID, 7);//ultimo valor inteiro da divisao MOD


$inicio = ($_SESSION['inicio']++)*7; 
$fim = $inicio+6;
if($inicio==$r)://///informar a ultima pagina da lista
    unset( $_SESSION['inicio'] );
    $_SESSION['inicio']=0;
endif;

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
$query = "select * from painel where id between '$inicio' and '$fim' order by  id";
$resultados = mysqli_query($conexao,$query);

         echo "<tr style='font-weight: bold; font-size:200%; font-family:arvo; background-color: #141516; opacity: 0.9;'>";
           echo "<th >ITEM</th>";
           echo "<th >VALOR</th>";
           echo "<th style='font-weight: bold; font-size:120%; font-family:arvo; border-top: 0px'; background-color: #141516; opacity: 0.7; id='imagem' rowspan='8' height='47' width='4'>"."PROMOÇÃO"."<img src='".$imagemimg."'/>"."<a style='font-weight: bold; font-size:100%; font-family:arvo; '>".$nomeimg."</a><br>"."<a style='font-weight: bold; font-size:100%; font-family:arvo;'>".'R$ '.$valorimg.' '."</a>"."<a style='font-weight: bold; font-size:100%; font-family:arvo;'>".$unidadeimg."</a>"."</'th>";
         echo "</tr>";
while($dados=mysqli_fetch_array($resultados)) {
    
echo "<tr >";
echo "<td  style='font-weight: bold; font-size:200%; font-family:arvo; background-color: #141516; opacity: 0.7;'>".$dados["item"]."</td>";
echo "<td  style='font-weight: bold; font-size:200%; font-family:arvo; background-color: #141516; opacity: 0.7;'>".$dados["valor"]." ".$dados["unidade"]."</td>";
echo "</tr>";
}

mysqli_close($conexao);
?>
