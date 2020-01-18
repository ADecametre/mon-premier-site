<?php

require "../../connect.php";

$sql = "SELECT `id` FROM b_users";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $GLOBALS[$row['id']]=0;
        $GLOBALS['B'.$row['id']]=0;
        $GLOBALS['R'.$row['id']]=0;
    }
} else {
    echo "No users";
}



function TR($nom, $donneur, $receveur, $argent) {
    
    switch($donneur) {
        // case "A":
        //     $GLOBALS['A']-=$argent;
        //     break;
        // case "F":
        //     $GLOBALS['F']-=$argent;
        //     break;
        case "B":
            // switch($receveur) {
            //     case "A":
            //         $GLOBALS['BA']-=$argent;
            //         break;
            //     case "F":
            //         $GLOBALS['BF']-=$argent;
            //         break;
            // };
            $GLOBALS['B'.$receveur]-=$argent;
            break;
        case "O":
            break;
        case "R":
            // switch($receveur) {
            //     case "A":
            //         $GLOBALS['RA']-=$argent;
            //         break;
            //     case "F":
            //         $GLOBALS['RF']-=$argent;
            //         break;
            // };
            $GLOBALS['R'.$receveur]-=$argent;
            break;
        default:
            $GLOBALS[$donneur]-=$argent;
    };
    
    switch($receveur) {
        // case "A":
        //     $GLOBALS['A']+=$argent;
        //     break;
        // case "F":
        //     $GLOBALS['F']+=$argent;
        //     break;
        case "B":
            // switch($donneur) {
            //     case "A":
            //         $GLOBALS['BA']+=$argent;
            //         break;
            //     case "F":
            //         $GLOBALS['BF']+=$argent;
            //         break;
            // };
            $GLOBALS['B'.$donneur]+=$argent;
            break;
        case "R":
            // switch($donneur) {
            //     case "A":
            //         $GLOBALS['RA']+=$argent;
            //         break;
            //     case "F":
            //         $GLOBALS['RF']+=$argent;
            //         break;
            // };
            $GLOBALS['R'.$donneur]+=$argent;
            break;
        default:
            $GLOBALS[$receveur]+=$argent;
    };
    
    // if($GLOBALS['A'] < 0){
    //     $GLOBALS['BA']+=$GLOBALS['A'];
    //     $GLOBALS['A']=0;
    // };
    
    // if($GLOBALS['F'] < 0){
    //     $GLOBALS['BF']+=$GLOBALS['F'];
    //     $GLOBALS['F']=0;
    // };
    
    
    require "../../connect.php";
    
    $sql = "SELECT `id` FROM b_users";
    $result = $connect->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if($GLOBALS[$row['id']] < 0){
                $GLOBALS['B'.$row['id']]+=$GLOBALS[$row['id']];
                $GLOBALS[$row['id']]=0;
            };
        }
    } else {
        echo "No users";
    }
    
};

// echo $GLOBALS['A']."|".$GLOBALS['BA']."-".$GLOBALS['RA']."<br>".$GLOBALS['F']."|".$GLOBALS['BF']."-".$GLOBALS['RF']."<br><br><br>";

$connect->close();

?>