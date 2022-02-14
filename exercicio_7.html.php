<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio_7.html.php" method="post">
<h1>Calculo de la media de tres notas</h1>
<p>Primera nota: <input type="number" name="1"></p>
<p>Segunda nota: <input type="number" name="2"></p>
<p>Tercera nota: <input type="number" name="3"></p>
<input type="submit" value="enviar">

<?php
 if ($_REQUEST["1"])   {
   $suma = ($_REQUEST["1"] + $_REQUEST["2"] + $_REQUEST["3"] );
   $media = $suma / 3;
    echo " <br/> La media es = $media";

}
?>
</body>
</html>