<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"Site Internet"<bbrriiaadd@gmail.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<h3>Message</h3>
					<u>De :</u>'.$_POST['nom'].'<br />
					<u></u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
				</div>
			</body>
		</html>
		';

		mail("bbrriiaadd@outlook.com", "Nouveau message via votre site", $message, $header);
		$msg='"Votre message a bien été envoyé !"';
	}
	else
	{
		$msg='"Tous les champs obligatoires doivent être complétés !"';
	}
}
?>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body align="center">
		<form method="POST" action="" align="center">
		<h2>Formulaire de contact !</h2>
			Nom : <input class="form-control" type="text" name="nom" placeholder="Obligatoire" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
			Email : <input class="form-control" type="email" name="mail" placeholder="Non obligatoire" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
			Message : <textarea class="form-control" name="message" placeholder="Obligatoire"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
			<input class="btn btn-default" type="submit" value="Envoyer !" name="mailform"/>
		</form>
		<?php
		if(isset($msg))
		{
$msgtwo = "<script> alert(" . $msg . ") </script>";
			echo $msgtwo;
		}
		?>
	</body>
</html>