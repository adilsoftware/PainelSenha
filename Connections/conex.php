<?php
$hostname_conex = "fdb30.awardspace.net";
$database_conex = "";
$username_conex = "";
$password_conex = "";
// creación de la conexión a la base de datos con mysql_connect()
$conex = mysqli_connect($hostname_conex, $username_conex, $password_conex, $database_conex) or 
die ("No se ha podido conectar al servidor de Base de datos"); 

        
?>
