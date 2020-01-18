<?php

echo '<meta http-equiv="refresh" content="5">';

//echo '<body style="background-color: #dddddd">';
if($A < 0){$BA+=$A;};
if($F < 0){$BF+=$F;};
function conn($user, $sc){
    echo '<title>'.$GLOBALS['N'.$_GET['utilisateur']].' | ADam Bank</title>';
	echo'<div align="center" style="background-color: green;"><h1>'.$GLOBALS['f1'].' | <a href="http://a-decametre.tk/bank/"><img src="logout.png" width="32px" height="32px"></a></h1></div>';
	switch($sc){
		case true:
		switch($user){
			case "A":
			echo '<div style="background-color: #00ff11;" align="center"><h1><u>Bonjour '.$GLOBALS['NA'].' !</u></h1><h2>'.$GLOBALS['A'].' $</h2><h3>Dettes : '.$GLOBALS['BA'].' $</h3><h3>Retraits : '.$GLOBALS['RA'].' $</h3></div>';
				break;
			case "F":
				echo '<div style="background-color: #00ff11;" align="center"><h1><u>Bonjour '.$GLOBALS['NF'].' !</u></h1><h2>'.$GLOBALS['F'].' $</h2><h3>Dettes : '.$GLOBALS['BF'].' $</h3><h3>Retraits : '.$GLOBALS['RF'].' $</h3></div>';
				break;
			case "B":
			echo '<div style="background-color: #00ff11;" align="center"><h1>BANQUE ADAM</h1><h2><ul><li>A<ul><li>Dettes : '.$GLOBALS['BA'].' $</li><li>Retraits : '.$GLOBALS['RA'].' $</li></ul></li><li>F<ul><li>Dettes : '.$GLOBALS['BF'].' $</li><li>Retraits : '.$GLOBALS['RF'].' $</li></ul></li></ul></h2></div>';
		};
	};
};
$failconn='<title>Erreur | ADam Bank</title>'
        .'<div align="center" style="background-color: red;"><h2>'.$f2.'</h2></div>'
		.'<meta http-equiv="refresh" content="3;URL=http://a-decametre.tk/bank/?utilisateur='.$GLOBALS['utilisateur'].'">';

switch($GLOBALS['utilisateur']) {
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
	    
//		echo '<div align="center" style="background-color: grey;"><h2>'.$f3.'</h2></div>'
//		.'<meta http-equiv="refresh" content="3;URL=http://a-decametre.tk/bank/">';

        echo $failconn;
};
//echo "</body>";
?>