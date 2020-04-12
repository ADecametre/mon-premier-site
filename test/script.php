<?php
date_default_timezone_set("America/Montreal");
$date1=date_create_from_format("d/m/y H:i:s",date("d/m/y H:i:s"));
$date2=date_create_from_format("d/m/y H:i",$_GET['date']." ".$_GET['time']);
$diff=date_diff($date1,$date2);
if($date1<$date2){
    if($diff->format("%d")>0){
        echo $diff->format("%dj</br><small>%H:%I:%S</small>");
    }else if($diff->format("%h")>0){
        echo $diff->format("%h:%I:%S");
    }else if($diff->format("%i")>0){
        echo $diff->format("%i:%S");
    }else if($diff->format("%s")>0){
        echo $diff->format("%s secondes");
    }
}else{
    echo '<a onclick="location.reload()" href="#">VERSION DISPONIBLE</a>';
    echo "<style>#output2{display:none;}</style>";
}
?>