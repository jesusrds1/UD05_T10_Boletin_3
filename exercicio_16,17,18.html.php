<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 16,17,18</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="numero">Introduce un numero:</label>
    <input type="number" value="num">
    <br>
    <input type="submit" value="Enviar">
</form>

<?php

    if (!isset($_REQUEST['numero'])) {
        echo "<p>Tes que introducir un numero.</p>";
    }else if (filter_var($_REQUEST['numero'],FILTER_VALIDATE_INT)){
        $meuNumero = $_REQUEST['numero'];
        $meuNumero = abs($meuNumero);
        $primeironum = substr($meuNumero,0,1);
        echo "<p>O primerio dixito do numero é: $primeironum </p>";
        $ultimonum = substr($meuNumero,strlen($meuNumero,-1,1));
        echo "<p>O primerio dixito do numero é: $ultimonum </p>";
        $numerototal = strlen($meuNumero);
        echo "O numero total de dixitos e $numerototal";

    }else{
        echo "<p>Tes que introducir un numero.</p>";


    };

?>
</body>
</html>