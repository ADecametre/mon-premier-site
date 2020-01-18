<!DOCTYPE html>
<html>
<head>
<link rel="apple-touch-icon" sizes="57x57" href="http://a-decametre.tk/icones.ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="http://a-decametre.tk/icones.ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="http://a-decametre.tk/icones.ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="http://a-decametre.tk/icones.ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="http://a-decametre.tk/icones.ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="http://a-decametre.tk/icones.ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="http://a-decametre.tk/icones.ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="http://a-decametre.tk/icones.ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="http://a-decametre.tk/icones.ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="http://a-decametre.tk/icones.ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="http://a-decametre.tk/icones.ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="http://a-decametre.tk/icones.ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="http://a-decametre.tk/icones.ico/favicon-16x16.png">
<link rel="manifest" href="http://a-decametre.tk/icones.ico/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="http://a-decametre.tk/icones.ico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

	<meta content="text/html; charset=UTF-8" http-equiv="content-type">

	<title>ADam</title>



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

	</style>



	<script>

		$(document).ready(function(){
			
			("a").show(2500)
		});
	</script>


</head>
<body class="bg-success">
<div class="container">
	<br>
	<div>

	<table align="center" id="img-div">

	<tbody>

	<tr>

		<div><?PHP include "../../../haut-de-page.php"; ?></div>

	</tr>

	</tbody>

	</table>


	<br>

	</div>

	<div id="ND" style="background-color: green;"><br>
		<h2 align="center">Créer votre mot de passe</h2>
	</div>

	<div method="post" id="ND" align="center" style="background-color: green;">
	    <?php
	   
	   
	    if(isset($_GET['id']) && isset($_GET['numero'])){
	        if(isset($_POST['mot-de-passe'])){
	        include "../../../connect.php";
	        $sql = "SELECT " . $_GET['numero'] . " FROM projet WHERE id=" . $_GET['id'];
            $result = $connect->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                        while($row = $result->fetch_assoc()) {
                            if($row[$_GET['numero']]!="ADNOPE"){
                                if($_POST['mot-de-passe']!="ADNOPE"){}
                                else{
                                  $sql = "UPDATE `projet` SET `". $_GET['numero'] ."`=\"". $_POST['mot-de-passe']   ."\" WHERE id=". $_GET['id'];
                                  echo '<script>alert("Mot de passe modifié avec succès !");</script><meta http-equiv="refresh" content="1;URL=http://www.a-decametre.tk/mes-presentations-orales/edit/?id='.$_GET['id'].'" />';
                                        if ($connect->query($sql) === TRUE){}
                                        else {
                                            echo "Erreur: " . $conn->error;
                                    };  
                                };
                            }else{
                                $sql = "UPDATE `projet` SET `". $_GET['numero'] ."`=\"". $_POST['mot-de-passe'] ."\" WHERE id=". $_GET['id'];
                                echo '<script>alert("Mot de passe modifié avec succès !");</script><meta http-equiv="refresh" content="1;URL=http://www.a-decametre.tk/mes-presentations-orales/edit/?id='.$_GET['id'].'" />';
                                    if ($connect->query($sql) === TRUE){}
                                    else {
                                        echo "Erreur: " . $conn->error;
                                    };                                
                            };
                        }
                } else {
                    echo "0 results";
                }
	        }else{
	           echo '<form method="POST">
            Mot de passe:<br>
                <input type="password" name="mot-de-passe"></br>
            <input type="submit" value="OK">
        </form>';
	        };
	       //$sql = "UPDATE projet SET ". $_POST['numero'] ."='". $_POST['mot-de-passe'] ."' WHERE id=". $_POST['id'];
 
        //         if ($connect->query($sql) === TRUE){}
        //         else {
        //             echo "Erreur: " . $conn->error;
                // };

	    }
	    else{
	        echo '<form method="GET">
            Id:<br>
                <input type="text" name="id"></br>
            Num&#233;ro:<br>
                <input type="text" name="numero"></br>
            <input type="submit" value="OK">
        </form>';
/*
            Mot de passe:<br>
                <input type="password" name="mot-de-passe"></br>

*/
	    }
        ?>
	</div>


	<br><br>
	<div align="center"><a class="btn btn-info btn-lg" data-toggle="modal" data-target="#qqliens">Quelques liens</a></div>

	<div class="modal fade" id="qqliens"><div class="modal-dialog modal-lg"><div class="modal-content">

		<section class="modal-header">
			<button class="btn btn-default close" data-dismiss="modal"><span style="font-size: 30px;" class="glyphicon glyphicon-remove-circle"></span></button>
			<h1 class="modal-title" align="center">Quelques liens</h1>
		</section>
		<section class="modal-body">
				<table align="center" class="hidden-xs hidden-sm visible-md visible-lg">
					<td class="links col-md-6"><a href="mailto:bbrriiaadd@gmail.com" target="_blank"><img class="email" src="https://daks2k3a4ib2z.cloudfront.net/580ea75512564ed05c3a8455/588f6062c498fd3f484dacf2_Gmail_wordmark.svg" /></a><br></td>
					<td class="links col-md-6"><a href="mailto:bbrriiaadd@outlook.com" target="_blank"><img class="email" src="https://r1.res.office365.com/owalanding/v1.11/images/landing-logoblue.png" /></a><br></td>
					<tr><!--<td class="links col-md-6"><a href="https://www.youtube.com/channel/UCT3WdLJ2lrtuxM40c5eKw6w" target="_blank"><img src="https://www.youtube.com/yts/img/favicon_32-vfl8NGn4k.png" /></a><br><p>Adam B.</p></td>
					<td class="links col-md-6"><a href="https://www.youtube.com/channel/UCrVowm681b8gnV1-tYbdCVQ" target="_blank"><img src="https://www.youtube.com/yts/img/favicon_32-vfl8NGn4k.png" /></a><br><p>InformADam</p></td>-->
				</table>

				<table align="center" class="visible-xs visible-sm hidden-md hidden-lg">
					<td class="links col-md-6"><a href="mailto:bbrriiaadd@gmail.com" target="_blank"><img class="email" src="https://daks2k3a4ib2z.cloudfront.net/580ea75512564ed05c3a8455/588f6062c498fd3f484dacf2_Gmail_wordmark.svg" /></a><br></td>
					<tr><td class="links col-md-6"><a href="mailto:bbrriiaadd@outlook.com" target="_blank"><img class="email" src="https://r1.res.office365.com/owalanding/v1.11/images/landing-logoblue.png" /></a><br></td>
					<tr><!--<td class="links col-md-6"><a href="https://www.youtube.com/channel/UCT3WdLJ2lrtuxM40c5eKw6w" target="_blank"><img src="https://www.youtube.com/yts/img/favicon_32-vfl8NGn4k.png" /></a><p> Adam B.</p></td>
					<tr><td class="links col-md-6"><a href="https://www.youtube.com/channel/UCrVowm681b8gnV1-tYbdCVQ" target="_blank"><img src="https://www.youtube.com/yts/img/favicon_32-vfl8NGn4k.png" /></a><p> InformADam</p></td>-->
				</table>

		</section>
		<section class="modal-footer">
			<?php include "formulaire_de_contact.php"; ?>
		</section>

	</div></div></div>

<br><br><br>

<footer><div align="center"><h4 style="background-color:yellow;">Adam <?php echo date("Y") ?></h4></div></footer>
	</div></body>
</html>