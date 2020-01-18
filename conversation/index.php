<?php
include '../connect.php';session_start();
if(isset($_SESSION['nom']) && isset($_SESSION['align']) && isset($_SESSION['color']) && isset($_SESSION['conversation'])){

		/*$sql  = 'SELECT * FROM `users` WHERE `nom`="'.$_POST['name'].'" and `password`="'.$_POST['password'].'"';
		$result = $connect->query($sql);
		if ($result->num_rows > 0) {
    			// output data of each row
    			while($row = $result->fetch_assoc()) {
				#if ("Adam" == $row['nom']){
					#if ($_POST['name'] == $row['password']){
						$_POST['nom'] = $row['nom'];//"Adam"
						$_POST['align'] = $row['align'];//"left";
						$_POST['color'] = $row['color'];//"green";
						$_POST['conversation'] = $row['conversation'];//"conversation-adam-ayman";
					//}else{ $msg = "'Nom ou mot de passe incorrects !'"; };
				//};else{ $msg = "'Nom ou mot de passe incorrects !'"; };
			};
		} else {
    			echo '<script>alert("Nom et/ou mot de passe incorrect !");</script>'
    			.$_POST['name'].$_POST['password']
    			#.'<meta http-equiv="refresh" content="0;URL=/conversation/log-in">'
    			;
		};*/

if(isset($msg))
		{
$msgtwo = "<script> alert(" . $msg . ") </script>";
			echo $msgtwo;
     echo "<a class=\"btn btn-info\" href=\"log-in\">Se connecter</a>";
		};



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf8_general_ci" />
<link rel="apple-touch-icon" sizes="57x57" href="../icones.ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../icones.ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../icones.ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../icones.ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../icones.ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../icones.ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../icones.ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../icones.ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../icones.ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../icones.ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../icones.ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../icones.ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../icones.ico/favicon-16x16.png">
<link rel="manifest" href="../icones.ico/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../icones.ico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

	<meta content="text/html; charset=UTF-8" http-equiv="content-type">

	<title>Conversation &#108; ADam</title>



	<link rel="stylesheet" media="screen" type="text/css" title="style" href="style.css">




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



	<style>

	.container {
		background-color: #00ef2b;
		}
	#ND {
		height: 150px;
		border-style: outset;
		border-width: 10px;
		}
	#ND2 {
		height: 200px;
		border-style: outset;
		border-width: 10px;
		}
	#ND2M {
		height: 310px;
		border-style: outset;
		border-width: 10px;
		}
	#img-div {
		border-style: ridge;
		border-width: 10px;
		}
	a {
		align: center;
		text-decoration: none;
		}
	.links {
		border-width: 2px;
		border-style: solid;
height: 75px;
		}
	 .email {
		height: 25px;
		width: 125px;
		display: inline;
		}
	p {
		display: inline;
		}
	#message1 {
		opacity: 0.5;
		}
	#message2 {
		opacity: 0.8;
		}
	#message3 {
		opacity: 1;
		}
	header {
		background-color: green;
		border-style: groove;
		border-width: 10px;
		}
	#top {
		background-color: red;
		border-style: solid;
		border-width: 10px;
		border-radius: 25px;
		width: 100px;
		height: 100px;
		}
	#bottom {
		background-color: red;
		border-style: solid;
		border-width: 10px;
		border-radius: 25px;
		width: 100px;
		height: 100px;
		}
	</style>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">

		$(document).ready(function(){
			
			("h1").hide(2500)
		});
</script>





<script>
function refresh_div()
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
var filename = 'messages.php';
xhr_object.open(method, filename, true);
xhr_object.onreadystatechange = function()
{
if(xhr_object.readyState == 4)
{
var tmp = xhr_object.responseText;
document.getElementById('refresh').innerHTML = tmp;
setTimeout(refresh_div, 1000);
}
}
xhr_object.send(null);
}
</script>





</head>

<body onload='refresh_div();' class="bg-success">
<div class="container">
	<br><br><br>

<header>
			<br><h1 align="center">Conversation</h1><br>
			<div align="right" style="background-color:yellow;margin-left:90%;"><a href="/conversation/log-out"><h6 align="center">Déconnexion</h6></a></div>
		</header>

			<a href="#bottom"><div align="center" id="top"><br><span class="glyphicon glyphicon-chevron-down"></span></div></a>

<div id="refresh"></div>

<a href="#top"><div align="center" id="bottom"><br><span class="glyphicon glyphicon-chevron-up"></span></div></a>

		<footer>
		<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['message']))
	{
		/*$message='
			<div align="center">
					<u></u>'.$_POST['nom'].'<br />
					<u></u>'.$_POST['message'].'<br />
					<br />
					'.nl2br($_POST['message']).'
			</div>
		';*/
//$_POST['nom'] = "Adam";
		$premsg="INSERT INTO `conversation-adam-ayman` (`id`, `align`, `color`, `nom`, `message`) VALUES (NULL, '";
 		$premsg.=$_SESSION['align'];
#"left";
		$premsg.="', '";
 		$premsg.=$_SESSION['color'];
#"#00ff00;";
		$premsg.="', '";
 		$premsg.=$_SESSION['nom'];
#"Adam";
 		$premsg.="', '";
 		$premsg.=$_POST['message'];
 		$premsg.="');";
		if ($connect->query($premsg) === TRUE) {
    $msg="\"Message envoyé !\"";
} else {
    echo "<h1>Une erreur s'est produite</h1><br>" /*. $premsg . "<br>" . $connect-->error*/ . "<h3>Informes-moi en :</h3>";
//include '../formulaire de contact.php';
};
	}
	else
	{
		$msg="\"Le champ message doit être complété !\"";
	};
};
?>
	<head>
		<meta charset="utf-8" />
	</head>

<form method="POST" action="" align="center">
			<input placeholder="
			    <?php if(isset($msg)){echo $msgtwo;}; ?>
			" type="text" class="form-control" name="message"></input><br /><br />
			<input class="btn btn-default" type="submit" value="Envoyer" name="mailform"/>
		</form>
		<?php
/*		if(isset($msg))
		{
$msgtwo = "<script> alert(" . $msg . ") </script>";
			echo $msgtwo;
		};*/
mysqli_close($connect);

		?>
	<br><br><br><br><br><br><br><br><br><br>
		</footer>

	</div></div></div>



	<br><br><br>


</div></body>
</html>

<?php };if(!isset($_SESSION['nom']) || !isset($_SESSION['align']) || !isset($_SESSION['color']) || !isset($_SESSION['conversation'])){echo '<meta http-equiv="refresh" content="0;URL=/conversation/log-in/">';} ?>