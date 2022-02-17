<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<p>Numero 1 <input type="text" name="a" size="5"></p> 
<p>Numero 2 <input type="text" name="b" size="5"></p> 
<p>Numero 3 <input type="text" name="c" size="5"></p>
<input type="submit" value="enviar">
</form>

<?php

    $numeros = array ($_REQUEST["a"], $_REQUEST["b"],$_REQUEST["c"]);
    sort($numeros);
    foreach ($numeros as $key => $value){
        echo " <br> Menor a mayor: $value";
     };
     
?>





</body>
</html>