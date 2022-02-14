<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action="exercicio_9.html.php"> 
    <p>a = <input type="text" name="a" size="5"></p> 
    <p>b = <input type="text" name="b" size="5"></p> 
    <p>c = <input type="text" name="c" size="5"></p> 
    <p><input type="reset" value="Restablecer" name="B2">&nbsp; 
    <input type="submit" value="Calcular" name="B1"></p> 
</form> 

</body> 

</html> 

<?php 

$a = $_REQUEST['a']; 
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];

$neg = -1; 

$menosb = $b * $neg; 
$oper1 = pow($b,2); 
$oper2 = 4*$a*$c; 
$resta = $oper1-$oper2; 
$raiz = pow($resta,(1/2)); 
$dosa = 2*$a; 

$result1 = ($menosb + $raiz)/$dosa; 
$result2 = ($menosb - $raiz)/$dosa; 

echo"X<sub>1</sub> = $result1<br>"; 
echo"X<sub>2</sub> = $result2"; 
?>
</body>
</html>