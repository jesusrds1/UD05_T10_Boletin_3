<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <title>Boletin 3 EXERCICIO 1</title>
</head>
<body>
<?php
if(!isset($_REQUEST["hora"])){

}else if($_REQUEST["hora"]>= 13 || $_REQUEST["hora"]<=20)  {
    echo "Buenas tardes";

}else if($_REQUEST["hora"]>= 6 || $_REQUEST["hora"]<=12)  {
    echo "Buenos Dias";

}else if($_REQUEST["hora"]>= 21 || $_REQUEST["hora"]<=5)  {
    echo "Buenos Dias";
    
}else{}  

?>
</body>
</html>