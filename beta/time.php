<?php

date_default_timezone_set("America/Montreal");

$d1=$_GET['v'];
$d2=time();

?>

<body align="center">
    <div>
    <h3 style="margin-block-start:0;margin-block-end:0;margin-top:0;margin-bottom:0;display:inline">
        <?php /*
        if($d1>$d2 && $d1!=8){
            if($_GET['n']=="fi"){
                echo "Vous n'aurez plus accès dans";
            }else if($_GET['n']=="st"){
                echo "Vous aurez accès dans";
            }
        }else{echo '<br>';} */
        ?>
    </h3>
    <h1 style="margin-block-start:0;margin-block-end:0;margin-top:0;margin-bottom:0;display:inline">
        <?php
        $dt1=date('Y-m-d H:i:s', $d1);
        $dt2=date('Y-m-d H:i:s', $d2);
        
        $datetime1 = new DateTime($dt1);//start time
        $datetime2 = new DateTime($dt2);//end time
        $interval = $datetime1->diff($datetime2);
        if($d1==8){
            echo 'Accès illimité';
        }else if($d1>$d2){
            if($interval->format('%y')!=0){
                if($interval->format('%y')>1){
                    if($interval->format('%d')>1){
                        echo $interval->format('%y ans, %m mois, %d jours');
                    }else{
                        echo $interval->format('%y ans, %m mois, %d jour');
                    }
                }else{
                    if($interval->format('%d')>1){
                        echo $interval->format('%y an, %m mois, %d jours');
                    }else{
                        echo $interval->format('%y an, %m mois, %d jour');
                    }
                }
            }else if($interval->format('%m')!=0){
                if($interval->format('%d')>1){
                    echo $interval->format('%m mois, %d jours');
                }else{
                    echo $interval->format('%m mois, %d jour');
                }
            }else if($interval->format('%d')!=0){
                echo '<meta http-equiv="refresh" content="60">';
                if($interval->format('%d')>1){
                    echo $interval->format('%d jours&nbsp;&nbsp;<small>%h:%I</small>');
                }else{
                    echo $interval->format('%d jour&nbsp;&nbsp;<small>%h:%I</small>');
                }
            }else if($d1>$d2){
                echo '<meta http-equiv="refresh" content="1">';
                echo $interval->format('%h:%I:%S');
            }
        }else{
            /*if($_GET['n']=="fi"){
                echo "Vous n'avez plus accès";
            }else if($_GET['n']=="st"){
                echo "Veuillez patienter";
            }*/
            echo '<a href="http://a-decametre.tk" target="_blank">Accéder à la version 2.0</a>';
        }
        ?>
    </h1>
    <h6>
        <?php
        /*if($d1!=8){
            echo $dt1;
        }else{
            echo '&#8734;';
        }*/
        ?>
    </h6>
    </div>
</body>