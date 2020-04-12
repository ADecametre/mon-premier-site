<?php

sql("SELECT `v`, `date`, `hour` FROM `ver` ORDER BY `v` ASC", null, '
    if(date_create_from_format("d/m/y H:i", date("d/m/y H:i"))>=date_create_from_format("d/m/y H:i", $row["date"]." ".$row["hour"]) && strpos($row["date"], "?")===false){
        $GLOBALS["cv1"]=$row["v"];
    }
');
if(
    ($GLOBALS['b_pass']==false && sql('SELECT `'.$_GET['b_page'].'` FROM `b_code` WHERE `code`="default-'.$GLOBALS["cv1"].'"', "r", $_GET['b_page'])==1) 
    || 
    ($GLOBALS['b_pass']==true && sql('SELECT * FROM `b_code` WHERE `code`="'.$_COOKIE["beta"].'" AND `st`<'.time().' AND `fi`>'.time().' AND `'.$_GET['b_page'].'`=1', "nrow")))
    {
    // die(require $sl."beta/".$_GET['b_page']);
    require $sl."beta/".$_GET['b_page'];
    $_GLOBALS['b_stop']=true;
    // return;
}else{
    $_GLOBALS['b_stop']=false;
};



// if(($GLOBALS['b_pass']==false && sql('SELECT `'.$_GET['b_page'].'` FROM `b_code` WHERE `code` LIKE "%default%" AND `st`<'.time().' AND `fi`>'.time(), "r", $_GET['b_page'])==1) || ($GLOBALS['b_pass']==true && sql('SELECT * FROM `b_code` WHERE `code`="'.$_COOKIE["beta"].'" AND `st`<'.time().' AND `fi`>'.time().' AND `'.$_GET['b_page'].'`=1', "nrow"))){
//     // die(require $sl."beta/".$_GET['b_page']);
//     require $sl."beta/".$_GET['b_page'];
//     $_GLOBALS['b_stop']=true;
//     // return;
// }else{
//     $_GLOBALS['b_stop']=false;
// };



// if(sql('SELECT `'.$_GET['b_page'].'` FROM `b_code` WHERE `code` LIKE "%default%" AND `st`<'.time().' AND `fi`>'.time(), "r", $_GET['b_page'])==1 || ($GLOBALS['b_pass']==true && sql('SELECT * FROM `b_code` WHERE `code`="'.$_COOKIE["beta"].'" AND `st`<'.time().' AND `fi`>'.time().' AND `'.$_GET['b_page'].'`=1', "nrow"))){
//     // die(require $sl."beta/".$_GET['b_page']);
//     require $sl."beta/".$_GET['b_page'];
//     $_GLOBALS['b_stop']=true;
//     // return;
// }else if(){
// }else{
//     $_GLOBALS['b_stop']=false;
// };
?>