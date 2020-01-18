<?php

#require "../connect.php";

/*	BIENVENUE				*/
/*			À ADAM BANK		*/function connection(){


	$GLOBALS['utilisateur']=
		$_GET['utilisateur']
		
	;if(isset($_POST['motdepasse'])){
	    $GLOBALS['motdepasse']=$_POST['motdepasse'];
	}else if(isset($_GET['conn'])){
	    
	    $GLOBALS['timep1']=time()+1;
	    $GLOBALS['timep2']=time()+2;
	    $GLOBALS['timep3']=time()+3;
	    $GLOBALS['timep4']=time()+4;
	    
	    $GLOBALS['timen1']=time()-1;
	    $GLOBALS['timen2']=time()-2;
	    $GLOBALS['timen3']=time()-3;
	    $GLOBALS['timen4']=time()-2;
	    
	    function conne(){$GLOBALS['motdepasse']=$GLOBALS[$GLOBALS['utilisateur'].'P'];};
	    
	    switch($_GET['conn']){
	       case time() :
	           conne();
	           break;
	       case $GLOBALS['timep1'] :
	           conne();
	           break;
	       case $GLOBALS['timep2'] :
	           conne();
	           break;
	       case $GLOBALS['timep3'] :
	           conne();
	           break;
	       case $GLOBALS['timep4'] :
	           conne();
	           break;
	       case $GLOBALS['timen1'] :
	           conne();
	           break;
	       case $GLOBALS['timen2'] :
	           conne();
	           break;
	       case $GLOBALS['timen3'] :
	           conne();
	           break;
	       case $GLOBALS['timen4'] :
	           conne();
	           break;
	       default :
	           $GLOBALS['motdepasse']="";
	    };
	};
#								$GLOBALS[''];

	;$GLOBALS['showcash']=
		true
	;
	
/*	echo '
	    <meta http-equiv="refresh" content="5;URL='
	    .$_SERVER['HTTP_REFERER'].
	    '&conn=true">
	';*/

};





$A=0;
$BA=0;
$RA=0;
$NA="Adam";

$F=0;
$BF=0;
$RF=0;
$NF="Safiya";

$f1="&#x1F60F;";
$f2="&#x1F629;";
$f3="&#x1F614;";

function TR($nom, $donneur, $receveur, $argent) {switch($donneur) {case "A":$GLOBALS['A']-=$argent;break;case "F":$GLOBALS['F']-=$argent;break;case "B":switch($receveur) {case "A":$GLOBALS['BA']-=$argent;break;case "F":$GLOBALS['BF']-=$argent;break;};break;case "O":break;case "R":switch($receveur) {case "A":$GLOBALS['RA']-=$argent;break;case "F":$GLOBALS['RF']-=$argent;break;};};switch($receveur) {case "A":$GLOBALS['A']+=$argent;break;case "F":$GLOBALS['F']+=$argent;break;case "B":switch($donneur) {case "A":$GLOBALS['BA']+=$argent;break;case "F":$GLOBALS['BF']+=$argent;break;};break;case "R":switch($donneur) {case "A":$GLOBALS['RA']+=$argent;break;case "F":$GLOBALS['RF']+=$argent;break;};break;};if($GLOBALS['A'] < 0){$GLOBALS['BA']+=$GLOBALS['A'];$GLOBALS['A']=0;};if($GLOBALS['F'] < 0){$GLOBALS['BF']+=$GLOBALS['F'];$GLOBALS['F']=0;};};

require 'TRs.php';









if(isset($_GET['conn'])){
    echo '<title>'.$GLOBALS['N'.$_GET['utilisateur']].' | ADam Bank</title>';
    switch($_GET['conn']){
        case true :
            connection();
            require 'content.php';
            echo '<meta http-equiv="refresh" content="5;URL=?utilisateur='.$_GET['utilisateur'].'&conn=';
                $time=time()+5;
                echo $time.'">';
            break;
    };
}else if(isset($_GET['utilisateur']) && isset($_POST['motdepasse'])){
    connection();
    require 'content.php';
    echo '<meta http-equiv="refresh" content="5;URL=?utilisateur='.$_GET['utilisateur'].'&conn=';
        $time=time()+5;
        echo $time.'">';
}else if(isset($_GET['utilisateur'])){
    echo '<title>Connexion | ADam Bank</title>';
    echo '
        <form method="post">
            Mot de passe : <input type="password" name="motdepasse">
            <input type="submit" value="OK">
        </form>
    ';

    
}else{
    echo '<title>Connexion | ADam Bank</title>';
    echo '
        <form method="get">
            Nom d\'utilisateur : <input type="text" name="utilisateur">
            <input type="submit" value="OK">
        </form>
    ';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $utilisateur = $_POST['utilisateur']; 
        if (empty($utilisateur)) {echo "Name is empty";}
    }
};