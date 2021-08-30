<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Sala do usuario</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h1>OLA USUARIO BEM VINDO</h1><b    r>
<p><img style="margin: 10px;" src="<?php echo $_SESSION['foto'];?>" width="141" height="105.75" alt="Texto 1" title="Texto 1" /></p>
<p>Idenficação...: <?php echo $_SESSION['usuario'];?></p>
<p>Nome...: <?php echo $_SESSION['nome'];?></p>
<br>
<a  class="btn btn-danger"  href='https://adilpainel.atwebpages.com/qrcode/qrcode.html'>Ler Senha QRcode</a>

</body>
</html>