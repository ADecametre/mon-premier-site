<?php

/*	BIENVENUE				*/
/*			À ADAM BANK		*/function connection(){





















	$GLOBALS['utilisateur']=
		"A"
		
	;$GLOBALS['motdepasse']=
		""
#								$GLOBALS[''];

	;$GLOBALS['showcash']=
		true
	;
























};
$A=0;
$BA=0;
$RA=0;
$NA="Adam";

$F=100;
$BF=0;
$RF=0;
$NF="Safiya";

$f1="&#x1F60F;";
$f2="&#x1F629;";
$f3="&#x1F614;";

function TR($nom, $donneur, $receveur, $argent) {switch($donneur) {case "A":$GLOBALS['A']-=$argent;break;case "F":$GLOBALS['F']-=$argent;break;case "B":switch($receveur) {case "A":$GLOBALS['BA']-=$argent;break;case "F":$GLOBALS['BF']-=$argent;break;};break;case "O":break;case "R":switch($receveur) {case "A":$GLOBALS['RA']-=$argent;break;case "F":$GLOBALS['RF']-=$argent;break;};};switch($receveur) {case "A":$GLOBALS['A']+=$argent;break;case "F":$GLOBALS['F']+=$argent;break;case "B":switch($donneur) {case "A":$GLOBALS['BA']+=$argent;break;case "F":$GLOBALS['BF']+=$argent;break;};break;case "R":switch($donneur) {case "A":$GLOBALS['RA']+=$argent;break;case "F":$GLOBALS['RF']+=$argent;break;};break;};if($GLOBALS['A'] < 0){$GLOBALS['BA']+=$GLOBALS['A'];$GLOBALS['A']=0;};if($GLOBALS['F'] < 0){$GLOBALS['BF']+=$GLOBALS['F'];$GLOBALS['F']=0;};};
/*Début TRs*/


/*Fin TRs*/











$AU="A";						$FU="F";
$AP="";					$FP="";
connection();
echo '<body style="background-color: #dddddd">';
if($A < 0){$BA+=$A;};
if($F < 0){$BF+=$F;};
function conn($user, $sc){
	echo'<div align="center" style="background-color: green;"><h2>'.$GLOBALS['f1'].'</h2></div>';
	
	#new
	$N='$N';
	$A='$A';
	$B='$B';
	$R='$R';
	echo '<div style="background-color: #00ff11;" align="center"><h1>Bonjour '.$N.' !</h1><h2>'.$A.' $</h2><h3>Dettes : '.$B.' $</h3><h3>Retraits : '.$R.' $</h3></div>';
	#new
	
	/*switch($sc){
		case true:
		switch($user){
			case "A":
			    echo '<div style="background-color: #00ff11;" align="center"><h1>Bonjour '.$GLOBALS['NA'].' !</h1><h2>'.$GLOBALS['A'].' $</h2><h3>Dettes : '.$GLOBALS['BA'].' $</h3><h3>Retraits : '.$GLOBALS['RA'].' $</h3></div>';
				break;
			case "F":
				echo '<div style="background-color: #00ff11;" align="center"><h1>Bonjour '.$GLOBALS['NF'].' !</h1><h2>'.$GLOBALS['F'].' $</h2><h3>Dettes : '.$GLOBALS['BF'].' $</h3><h3>Retraits : '.$GLOBALS['RF'].' $</h3></div>';
				break;
			case "B":
			    echo '<div style="background-color: #00ff11;" align="center"><h1>BANQUE ADAM</h1><h2><ul><li>A<ul><li>Dettes : '.$GLOBALS['BA'].' $</li><li>Retraits : '.$GLOBALS['RA'].' $</li></ul></li><li>F<ul><li>Dettes : '.$GLOBALS['BF'].' $</li><li>Retraits : '.$GLOBALS['RF'].' $</li></ul></li></ul></h2></div>';
		};
	};*/
};
$failconn='<div align="center" style="background-color: red;"><h2>'.$f2.'</h2></div>';

switch($utilisateur) {
	case $AU:
		switch($motdepasse){case $AP: conn("A", $showcash); break; default: echo $failconn;};
		break;
	case $FU:
		switch($motdepasse){case $FP: conn("F", $showcash); break; default: echo $failconn;};
		break;
	case "BANK":
		conn("B", "true");
		break;
	default :
		echo '<div align="center" style="background-color: grey;"><h2>'.$f3.'</h2></div>';
};
echo "</body>";