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
    <label for="numero">Introduce un numero:</label>
    <input type="number" value="num">
    <br>
    <input type="submit" value="Enviar">
</form>


<?php

if (!isset($_POST['numero'])) {
    echo "<p>Tes que introducir un numero.</p>";
}else if(filter_var($_POST['numero'],FILTER_VALIDATE_INT)){

    $meuNumero = $_POST['numero'];
    $escapicua = true;
    for ($i=0; $i<strlen($meuNumero); $i++){

        $esquerda = substr($meuNumero,$i,1);
        $deireita = substr($meuNumero,strlen($meuNumero)-1-$i,1);
        if($esquerda != $deireita){
            $escapicua = false;
        }
    }

    if($escapicua){
        echo "O numero $meuNumero es capicua";

    }else{

        echo "O numero $meuNumero no es capicua";
    }
}else{
    echo "<p>Tes que introducir un numero.</p>";

}
?>
</body>
</html>