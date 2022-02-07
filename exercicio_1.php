<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 

        header('Content-Type: text/html; charset=UTF-8');

        $horario = array (
            '8:50-9:40'  => array ('IAW','SAD','ASX','ASX','IAW'),
            '9:40-10:30' => array ('IAW','SAD','EIA','ASX','SRI'),
            '10:30-11:20'=> array ('SRI','SAD','EIA','EIA','SRI'),
            '11:20-12:00'=> array ('RECREO'),
            '12:00-12:50'=> array ('SRI','ASO','SRI','IAW','SAD'),
            '12:50-13:40'=> array ('ASO','ASO','IAW','IAW','SAD'),
            '13:40-14:30'=> array ('ASX','SRI','IAW','SRI','SAD'),
            '14:30-16:00'=> array ('MEDIODIA'),
            '16:00-16:50'=> array (' ','SRI',' ','ASO',' '),
            '16:50-17:40'=> array (' ','SRI',' ','ASO',' '),
            '17:40-18:30'=> array (' ','SRI',' ','ASO',' '),
        );

        $dia = isset($_REQUEST["dia"]) ?$_REQUEST ["dia"]:"";
        $hora = isset($_REQUEST["hora"]) ?$_REQUEST ["hora"]:"";

        if($dia=="" || $hora ==""){
            echo "<p> Tes que escoller un dia e a hora </p>";
        }else if($dia<5 && $dia>=0 && $hora!=""){
           // echo $horario ['8:50-9:40'][$dia];
            echo "<p>A hora escollida e $hora.</p>";
            echo "<p>O dia escollido e $dia.</p>";
            $HorarioHoraEscollida =  $horario[$hora];
            echo "<p>Nese horario a clase é ".$HorarioHoraEscollida[$dia]."</p>";

        }else{
            echo "<p> O formato da hora ou dia non e corecto !! </p>";

        }
        
    ?>

</body>
</html>