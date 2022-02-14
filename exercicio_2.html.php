<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <title>Boletin 3 EXERCICIO 1</title>
</head>
<body>
<form action="exercicio_2.html.php" method="post">
<p>Inserte unha hora: <input type="number" name="hora"></p>
<input type="submit" value="enviar">
<br/>
<?php

if(!isset($_REQUEST["hora"])){

}else if ($_REQUEST["hora"]>= 6 && $_REQUEST["hora"] <=12)  {
    echo "Buenos Tardes";

}else if($_REQUEST["hora"]>= 13 && $_REQUEST["hora"]<=20)  {
    echo "Buenos Tardes";

}else if($_REQUEST["hora"]>= 21 || $_REQUEST["hora"]<=5)  {
    echo "Buenas noches";
    
}

?>
</body>
</html>