<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <title>Boletin 3 EXERCICIO 1</title>
</head>
<body>
    <form action="exercicio_1_php.html.php" method="post">
        <label for="dia">Escolle o dia da semana que lle interesa coñecer</label>
        <select name="dia">
            <option value="0"> <?php
            if(isset($_REQUEST["dia"]) && $_REQUEST["dia"] ==0){

                echo '<option value="0" selected> Luns </option>' ;
            }else{
                echo '<option value="0" > Luns </option>' ;
            }
            
            ?> 
            <option value="1"> <?php
            if(isset($_REQUEST["dia"]) && $_REQUEST["dia"] ==1){

                echo '<option value="1" selected> Martes </option>' ;
            }else{
                echo '<option value="1" > Martes </option>' ;
            }
            
            ?> 
            <option value="2"> <?php
            if(isset($_REQUEST["dia"]) && $_REQUEST["dia"] ==2){

                echo '<option value="2" selected> Mércores </option>' ;
            }else{
                echo '<option value="2" > Mércores </option>' ;
            }
            
            ?> 
            <option value="3">  <?php
            if(isset($_REQUEST["dia"]) && $_REQUEST["dia"] ==3){

                echo '<option value="3" selected> Xoves </option>' ;
            }else{
                echo '<option value="3" > Xoves </option>' ;
            }
            
            ?> 
            <option value="4" <?php
            if(isset($_REQUEST["dia"]) && $_REQUEST["dia"] ==4){

                echo '<option value="4" selected> Venres </option>' ;
            }else{
                echo '<option value="4" > Venres </option>' ;
            }
            
            ?> 
            


        </select>
        
        <br>
        <label for="hora">Escolle o dia da semana que lle interesa coñecer</label>
        <select name="hora">
            <option value="">Escolle</option>
            <?php
                
                if(isset($_REQUEST["hora"]) && $_REQUEST["hora"] =="8:50-9:40"){
    
                    echo '<option selected> 8:50-9:40 </option>' ;
                }else{
                    echo '<option > 8:50-9:40 </option>' ;
                }
                
                if(isset($_REQUEST["hora"]) && $_REQUEST["hora"] =="9:40-10:30"){
    
                    echo '<option selected> 9:40-10:30 </option>' ;
                }else{
                    echo '<option > 9:40-10:30 </option>' ;
                }
                    
                if(isset($_REQUEST["hora"]) && $_REQUEST["hora"] 
                =="10:30-11:20"){
    
                    echo '<option selected> 10:30-11:20 </option>' ;
                }else{
                    echo '<option > 10:30-11:20 </option>' ;
                }


                if(isset($_REQUEST["hora"]) && $_REQUEST["hora"] 
                =="12:00-12:50"){
    
                    echo '<option selected> 12:00-12:50 </option>' ;
                }else{
                    echo '<option > 12:00-12:50 </option>' ;
                }
                if(isset($_REQUEST["hora"]) && $_REQUEST["hora"] 
                =="12:50-13:40"){
    
                    echo '<option selected> 12:50-13:40 </option>' ;
                }else{
                    echo '<option > 12:50-13:40 </option>' ;
                }

                if(isset($_REQUEST["hora"]) && $_REQUEST["hora"] 
                =="13:40-14:30"){
    
                    echo '<option selected> 13:40-14:30</option>' ;
                }else{
                    echo '<option > 13:40-14:30 </option>' ;
                }


                if(isset($_REQUEST["hora"]) && $_REQUEST["hora"] 
                =="16:00-16:50"){
    
                    echo '<option selected> 16:00-16:50</option>' ;
                }else{
                    echo '<option > 16:00-16:50 </option>' ;
                }

                if(isset($_REQUEST["hora"]) && $_REQUEST["hora"] 
                =="16:50-17:30"){
    
                    echo '<option selected> 16:50-17:30</option>' ;
                }else{
                    echo '<option > 16:50-17:30 </option>' ;
                }

                if(isset($_REQUEST["hora"]) && $_REQUEST["hora"] 
                =="17:30-16:30"){
    
                    echo '<option selected> 17:30-16:30</option>' ;
                }else{
                    echo '<option >17:30-18:30 </option>' ;
                }

                
            ?>
        </select>
        <input type="submit" value="enviar">
    </form>
</body>

    <?php
 

      

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
        
        if(!isset($_REQUEST["dia"]) || !isset($_REQUEST["hora"])) {
            echo "<p> Tes que escoller un dia e a hora </p>";
        }else{
           $dia = $_REQUEST["dia"];
           $hora= $_REQUEST["hora"];
        $HorarioHoraEscollida =  $horario[$hora];
            echo "<p>Nese horario a clase é ".$HorarioHoraEscollida[$dia]."</p>";
        }
    ?>

</body>
</html>