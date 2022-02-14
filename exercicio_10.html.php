<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" > 
    <label for="dia">Dia</label>
    <input type="number" min ="1" max="31" name="dia"
    ><br/>
    <label for="mes">Mes</label>
    <select name="mes">
    <option value="01">Xaneiro</option>
    <option value="02">Febreiro</option>
    <option value="03">Marzo</option>
    <option value="04">Abril</option>
    <option value="05">Mayo</option>
    <option value="06">Xuño</option>
    <option value="07">Xullo</option>
    <option value="08">Agosto</option>
    <option value="09">Setembro</option>
    <option value="10">Octubro</option>
    <option value="11">Novembro</option>
    <option value="12">Decembro</option>
    <input type="submit" ><br/>
</form>

<?php
    if(!isset($_REQUEST["dia"]) || !isset($_REQUEST["mes"])){
        echo "<p> Tes que escoller o dia e o mes </p>";

    }else{
        $mes = $_REQUEST["mes"];
        $dia = $_REQUEST["dia"];
        $horoscopo = "";

      switch ($mes) {
        case '01':
            if($dia<20){
                $horoscopo = "Capricornio";
              }else{
                $horoscopo = "Acuario";
              }
        break;
        case '02':
              if($dia<19){
                $horoscopo = "Acuario";
              }else{
                $horoscopo = "Piscis";
              }
        break;
        case '03':
              if($dia<21){
                $horoscopo = "Piscis";
              }else{
                $horoscopo = "Aries";
              }
        break;
        case '04':
              if($dia<20){
                $horoscopo = "Aries";
              }else{
                $horoscopo = "Tauro";
              }
        break;
        case '05':
              if($dia<22){
                $horoscopo = "Tauro";
              }else{
                $horoscopo = "Géminis";
              }
        break;
        case '06':
              if($dia<22){
                $horoscopo = "Géminis";
              }else{
                $horoscopo = "Cáncer";
              }
        break;
        case '07':
              if($dia<23){
                $horoscopo = "Cáncer";
              }else{
                $horoscopo = "Leo";
              }
        break;
        case '08':
              if($dia<24){
                $horoscopo = "Leo";
              }else{
                $horoscopo = "Virgo";
              }
        break;
        case '09':
              if($dia<23){
                $horoscopo = "Virgo";
              }else{
                $horoscopo = "Libra";
              }
        break;
        case '10':
              if($dia<23){
                $horoscopo = "Libra";
              }else{
                $horoscopo = "Escorpio";
              }
        break;
        case '11':
              if($dia<21){
                $horoscopo = "Escorpio";
              }else{
                $horoscopo = "Sagitario";
              }
        break;
        case '12':
            if($dia<22){
                $horoscopo = "Escorpio";
              }else{
                $horoscopo = "Capricornio";
              }
        break;

     }
     echo "<p>O teu horóscopo é $horoscopo </p> ";
    }

?>
</body>
</html>