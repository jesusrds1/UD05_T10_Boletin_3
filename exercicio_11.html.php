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
    <label for="numero">Introduce una hora: <br></label>
    <input type="number" value="num1"> <br>
    <label for="numero">Introduce un minuto:<br></label>
    <input type="number" value="num2">
    <br>
    <input type="submit" value="Enviar">

    <?php
    $num = ($_REQUEST['num1'] * 60 * 60) + ($_REQUEST('num2') * 60);

    $result = $num - 86400 ;
    echo "son $result";
    ?>
</form>
</body>
</html>