<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <title>Boletin 3 EXERCICIO 1</title>
</head>
<body>
<form action="exercicio_3.html.php" method="post">
<label for="dia"><i style="color:green;font-size:30px;font-family:calibri ;"> Selecciona del 1-7 para conocer su correspondiente dia de la semana</i><br/></label>
<select name="dia">
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
<option value="5" >5</option>
<option value="6" >6</option>
<option value="7" >7</option>
</select>

<input type="submit" value="enviar">
<br/>
<?php

if(!isset($_REQUEST["dia"])){

}else if ($_REQUEST["dia"]==1)  {
    echo '<i style="color:red;font-size:30px;font-family:calibri ;">
      Lunes </i> ';

}else if($_REQUEST["dia"]==2)  {
    echo '<i style="color:red;font-size:30px;font-family:calibri ;">
    Martes </i> ';

}else if($_REQUEST["dia"]==3)  {
    echo '<i style="color:red;font-size:30px;font-family:calibri ;">
    Miercoles </i> ';
   
}else if($_REQUEST["dia"]==4)  {
    echo '<i style="color:red;font-size:30px;font-family:calibri ;">
    Jueves </i> ';

}else if($_REQUEST["dia"]==5)  {
    echo '<i style="color:red;font-size:30px;font-family:calibri ;">
      Viernes </i> ';
}else if($_REQUEST["dia"]==6)  {
    echo '<i style="color:red;font-size:30px;font-family:calibri ;">
    Sabado </i> ';

}else if($_REQUEST["dia"]==7)  {
    echo '<i style="color:red;font-size:30px;font-family:calibri ;">
    Domingo </i> ';
}

?>
</body>
</html>