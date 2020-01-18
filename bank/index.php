<?php
session_start();
?>



<?php
if(!isset($_SESSION['id'])){
    echo '<title>ADam Bank</title>';
    echo '<div align="center" style="background-color: grey;"><h1>&#x1F614;</h1></div>';
    echo '<meta http-equiv="refresh" content="1;URL=/bank/log-in">';
}else{
echo "

<script>
function refresh_div(info)
{
var xhr_object = null;
if(window.XMLHttpRequest)
{ // Firefox
xhr_object = new XMLHttpRequest();
}
else if(window.ActiveXObject)
{ // Internet Explorer
xhr_object = new ActiveXObject('Microsoft.XMLHTTP');
}
var method = 'POST';
var filename = 'u_info.php?info='+info;
xhr_object.open(method, filename, true);
xhr_object.onreadystatechange = function()
{
if(xhr_object.readyState == 4)
{
var tmp = xhr_object.responseText;
document.getElementById(info).innerHTML = tmp;
setTimeout(refresh_div, 2500, info);
}
}
xhr_object.send(null);
}
refresh_div('N');
refresh_div('A');
refresh_div('B');
refresh_div('R');
refresh_div('NT');

".

/*  "
 setInterval(function(){
     document.getElementById('echo').innerHTML = '<h1>Bonjour ".$_SESSION['N']." !</h1><h2>".$_SESSION['A']." $</h2><h3>Dettes : ".$_SESSION['B']." $</h3><h3>Retraits : ".$_SESSION['R']." $</h3>';
 }, 2500);
".  */
"</script>";

echo "
<title id='NT'>ADam Bank</title>
<body class='bg-success'>
    <div id='refresh'></div>

    ";
    
    #echo'<div align="center" style="background-color: green;"><h2>&#x1F60F;</h2></div>';
    echo'<div align="center" style="background-color: green;"><h1>&#x1F60F; | <a href="/bank/log-out"><img src="logout.png" width="32px" height="32px"></a></h1></div>';
    echo '
    
    <div id="echo" style="background-color: #00ff11;" align="center">
        <h1>Bonjour <u><span id="N"></span></u> !</h1>
        <h2><span id="A"></span> $</h2>
        <h3>Dettes : <span id="B"></span> $</h3><h3>Retraits : <span id="R"></span> $</h3>
    </div>
    
    ';



}

// require "../connect.php";

/*	BIENVENUE				*/
/*			À ADAM BANK		*/

/*function connection(){


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
	
	echo '
	    <meta http-equiv="refresh" content="5;URL='
	    .$_SERVER['HTTP_REFERER'].
	    '&conn=true">
	';

};*/





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









/*if(isset($_GET['conn'])){
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
}else if(isset($_POST['utilisateur']) && isset($_POST['motdepasse'])){
    connection();
    require 'content.php';
    echo '<meta http-equiv="refresh" content="5;URL=?utilisateur='.$_GET['utilisateur'].'&conn=';
        $time=time()+5;
        echo $time.'">';
}else{
    echo '<title>Connexion | ADam Bank</title>';
    echo '
        <form method="post" action="/..">
            Nom d\'utilisateur : <input type="text" name="utilisateur">
            Mot de passe : <input type="password" name="motdepasse">
            <input type="submit" value="OK">
        </form>
    ';
};*/
?>
</body>