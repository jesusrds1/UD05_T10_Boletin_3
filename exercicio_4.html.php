<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio_4.html.php" method="post">
<p>Numero de horas: <input type="number" name="hora"></p>
<input type="submit" value="enviar">
    <?php
$sueldo = 0;
if(!isset($_REQUEST["hora"])){

}else if ($_REQUEST["hora"] <=40 && $_REQUEST["hora"] >1 )   {
    $sueldo =  $_REQUEST["hora"] * 12;
    echo "Sueldo menor de 40 horas :$sueldo";

}else if($_REQUEST["hora"]> 40 )  {
   $sueldotot = ($_REQUEST["hora"] - 40) * 16 + (40 * 12);
    echo "Sueldo mayor de 40 horas : $sueldotot";

}
    ?>
</body>
</html>