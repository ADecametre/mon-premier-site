<?php session_start(); ?>
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



<!--
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
-->



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




</head>
<body>
<div class="container">

<header>
			<br><h1 align="center">Connexion</h1><br>
		</header>
<br><br><br><br><br>
	<head>
		<meta charset="utf-8" />
	</head>
<?php
include '../../connect.php';
?>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<form method="POST" align="center">
		<h2>Se connecter</h2>
			Nom : <input class="form-control" type="text" name="name" /><br /><br />
			Mot de passe : <input class="form-control" type="password" name="password" /><br /><br />
			<input class="btn btn-default" type="submit" value="Se connecter" name="mailform"/>
			<!--<a class="btn btn-success" href="../../conversation"><span class="glyphicon glyphicon-ok"></span></a>-->
			
			<?php
			    if(isset($_POST['name']) && isset($_POST['password'])){
			        include '../../connect.php';
	            	$sql  = 'SELECT * FROM `s_users` WHERE `name`="'.$_POST['name'].'" and `password`="'.$_POST['password'].'"';
		            $result = $connect->query($sql);
		               if ($result->num_rows > 0) {
		                   while($row = $result->fetch_assoc()) {
		                        $_SESSION['name'] = $row['name'];//"Adam"
			    		        $_SESSION['align'] = $row['align'];//"left";
				    		    #$_SESSION['color'] = $row['color'];//"green";
					        	#$_SESSION['conversation'] = $row['conversation'];//"conversation-adam-ayman";
					        	echo '<script>alert("Connexion réussie !");</script>';
					        	echo '<meta http-equiv="refresh" content="0;URL='."http://".$_SERVER['HTTP_HOST'];
					        	if(isset($_GET['src'])){echo $_GET['src'];}else{echo "/";}
					        	echo '">';
		                   };
		        } else {
    	        		echo '<script>alert("Nom et/ou mot de passe incorrect !");</script>'
    		        	#.'<meta http-equiv="refresh" content="0;URL=/conversation/log-in">'
    		        	;
		};
			    };
		    ?>
		</form>

	<br><br><br><br><br>
		

	</div></div></div>



	<br><br><br>


</div></body>
</html>