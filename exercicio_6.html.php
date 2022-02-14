<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio_6.html.php" method="post">
<p>Altura a calcular: <input type="number" name="altura"></p>
<input type="submit" value="enviar">
<?php
$g = 9.81;
if(!isset($_REQUEST["altura"])){
    
}else if ($_REQUEST["altura"]  )   {
   $total = sqrt(($_REQUEST["altura"] * 2) / $g) ;
    echo " <br/> El tiempo que tardara el objeto desde la altura son  $total segundos  ";

}
    ?>
</body>
</html>