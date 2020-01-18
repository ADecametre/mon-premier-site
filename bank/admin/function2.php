<?php

function TR($nom, $donneur, $receveur, $argent) {
    
    switch($donneur) {
        case "A":
            $GLOBALS['A']-=$argent;
            break;
        case "F":
            $GLOBALS['F']-=$argent;
            break;
        case "B":
            switch($receveur) {
                case "A":
                    $GLOBALS['BA']-=$argent;
                    break;
                case "F":
                    $GLOBALS['BF']-=$argent;
                    break;
            };
            break;
        case "O":
            break;
        case "R":
            switch($receveur) {
                case "A":
                    $GLOBALS['RA']-=$argent;
                    break;
                case "F":
                    $GLOBALS['RF']-=$argent;
                    break;
            };
    };
    
    switch($receveur) {
        case "A":
            $GLOBALS['A']+=$argent;
            break;
        case "F":
            $GLOBALS['F']+=$argent;
            break;
        case "B":
            switch($donneur) {
                case "A":
                    $GLOBALS['BA']+=$argent;
                    break;
                case "F":
                    $GLOBALS['BF']+=$argent;
                    break;
            };
            break;
        case "R":
            switch($donneur) {
                case "A":
                    $GLOBALS['RA']+=$argent;
                    break;
                case "F":
                    $GLOBALS['RF']+=$argent;
                    break;
            };
            break;
    };
    
    if($GLOBALS['A'] < 0){
        $GLOBALS['BA']+=$GLOBALS['A'];
        $GLOBALS['A']=0;
    };
    
    if($GLOBALS['F'] < 0){
        $GLOBALS['BF']+=$GLOBALS['F'];
        $GLOBALS['F']=0;
    };
    
};

?>