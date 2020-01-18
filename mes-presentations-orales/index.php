<?php session_start(); ?>
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

		<div></div>

	</tr>

	</tbody>

	</table>


	<br>

	</div>
<?PHP include "../haut-de-page.php"; ?>
	<div id="ND" style="background-color: green;"><br>
		<h2 align="center">Mes pr&#233;sentations orales</h2>
	</div>

	<div class="" id="ND" align="center" style="background-color: green;"><br>
	<?php
	 function projet($id, $nom, $sujet, $matiere, $image, $lien, $time) {
	   //  date_default_timezone_set("America/Montreal");
	   //  echo time();
	     if ($time < time()) {
	        if(isset($_GET['id'])){ switch($_GET['id']){ case $id:
// 	        echo "<div class=\"col-xs-6 col-sm-4 col-md-3 col-lg-2\"><div><a data-toggle=\"modal\" data-target=\"#" . $id ."\"><img alt=\"". $nom ."\" class=\"img-responsive\" width=\"400px\" height=\"240px\" src=\"fichiers/" . $image . "\" /></a></div></div>

// 	                <div class=\"modal fade\" id=\"" . $id . "\"><div class=\"modal-dialog modal-lg\"><div class=\"modal-content\">

// 		                <section class=\"modal-header\">
// 			            <button class=\"btn btn-default close\" data-dismiss=\"modal\"><span style=\"font-size: 30px;\" class=\"glyphicon glyphicon-remove-circle\"></span></button>
// 			            <h1 class=\"modal-title\" align=\"center\">" . $nom . "</h1>
// 			            <h2 align=\"center\">" . $sujet . "</h2>
// 			            <h3 align=\"center\">" . $matiere . "</h3>
// 		                </section>
// 		                    <section align=\"center\" class=\"modal-body\"><div>"
				
// 				                . $lien .

// 		                        "</div></section>
// 		                        <section class=\"modal-footer\">
// 			                    <a href=\"edit?id=" . $id . "\"><h3><span class=\"glyphicon glyphicon-pencil\"></span> Modifier</h3></a>
// 		                </section>

// 	</div></div></div>"; 

                        //$GLOBALS['gid']=$_GET['id'];
                        
                        if(isset($_GET['redir'])){
                            switch($_GET['redir']){
                                case 'true' :
                                    $GLOBALS['redir']=true;
                                    break;
                                case 'false' :
                                    $GLOBALS['redir']=false;
                                    break;
                                default :
                                    $GLOBALS['redir']=false;
                                    break;
                            };
                        }else{$GLOBALS['redir']=false;}

		                echo '<section align="center">';
			            
			            switch($GLOBALS['redir']){
			                case false :
			                    echo '<h1 align=\"center\">' . $nom . '</h1>';
			                    break;
			            };
			            
			            echo '<h2 align=\"center\">' . $sujet . '</h2>
			            <h3 align=\"center\">' . $matiere . '</h3>
		                </section>
		                    <section align=\"center\">'
				
				                . $lien .

		                        '</section>
		                        <section class=\"modal-footer\">
			                    <a href="http://www.a-decametre.tk/mes-presentations-orales/edit/?id=' . $id . '"><h3><span class=\"glyphicon glyphicon-pencil\"></span> Modifier</h3></a>
		                </section>';
	            
	       break;default:};}else if(isset($_GET['matiere'])){ if($_GET['matiere'] != $matiere){}else{
	        echo "<div class=\"col-xs-6 col-sm-4 col-md-3 col-lg-2\"><div><a data-toggle=\"modal\" data-target=\"#" . $id ."\"><img alt=\"". $nom ."\" class=\"img-responsive\" width=\"400px\" height=\"240px\" src=\"fichiers/" . $image . "\" /></a></div></div>

	                <div class=\"modal fade\" id=\"" . $id . "\"><div class=\"modal-dialog modal-lg\"><div class=\"modal-content\">

		                <section class=\"modal-header\">
			            <button class=\"btn btn-default close\" data-dismiss=\"modal\"><span style=\"font-size: 30px;\" class=\"glyphicon glyphicon-remove-circle\"></span></button>
			            <h1 class=\"modal-title\" align=\"center\">" . $nom . "</h1>
			            <h2 align=\"center\">" . $sujet . "</h2>
			            <h3 align=\"center\">" . $matiere . "</h3>
		                </section>
		                    <section align=\"center\" class=\"modal-body\"><div>"
				
				                . $lien .

		                        "</div></section>
		                        <section class=\"modal-footer\">
			                    <a href=\"edit?id=" . $id . "\"><h3><span class=\"glyphicon glyphicon-pencil\"></span> Modifier</h3></a>
		                </section>

	</div></div></div>"; 
	        ;};}else if(!isset($_GET['id']) && !isset($_GET['matiere'])){
	    echo "<div class=\"col-xs-6 col-sm-4 col-md-3 col-lg-2\"><div><a data-toggle=\"modal\" data-target=\"#" . $id ."\"><img alt=\"". $nom ."\" class=\"img-responsive\" width=\"400px\" height=\"240px\" src=\"fichiers/" . $image . "\" /></a></div></div>

	                <div class=\"modal fade\" id=\"" . $id . "\"><div class=\"modal-dialog modal-lg\"><div class=\"modal-content\">

		                <section class=\"modal-header\">
			            <button class=\"btn btn-default close\" data-dismiss=\"modal\"><span style=\"font-size: 30px;\" class=\"glyphicon glyphicon-remove-circle\"></span></button>
			            <h1 class=\"modal-title\" align=\"center\">" . $nom . "</h1>
			            <h2 align=\"center\">" . $sujet . "</h2>
			            <h3 align=\"center\">" . $matiere . "</h3>
		                </section>
		                    <section align=\"center\" class=\"modal-body\"><div>"
				
				                . $lien .

		                        "</div></section>
		                        <section class=\"modal-footer\">
			                    <a href=\"edit?id=" . $id . "\"><h3><span class=\"glyphicon glyphicon-pencil\"></span> Modifier</h3></a>
		                </section>

	</div></div></div>";
	}; }else if(isset($_GET['id']) && $_GET['id']!=$id){}else{
	        echo "<div class=\"col-xs-6 col-sm-4 col-md-3 col-lg-2\"><div><a data-toggle=\"modal\" data-target=\"#" . $id ."\"><div align=\"center\"><h4>" . $sujet . "</h4></div></a></div></div>

	                <div class=\"modal fade\" id=\"" . $id . "\"><div class=\"modal-dialog modal-lg\"><div class=\"modal-content\">

		                <section class=\"modal-header\">
			            <button class=\"btn btn-default close\" data-dismiss=\"modal\"><span style=\"font-size: 30px;\" class=\"glyphicon glyphicon-remove-circle\"></span></button>
			            <h2 class=\"modal-title\" align=\"center\">" . $sujet . "</h2>
			            <h3 class=\"modal-title\" align=\"center\">" . $matiere . "</h3>
		                </section>
		                    <section align=\"center\" class=\"modal-body\"><div>
				
				                <h3>Pas encore disponible !</h3>

		                        </div></section>
		                        <section class=\"modal-footer\">
			                    <a href=\"edit?id=" . $id . "\"><h3><span class=\"glyphicon glyphicon-pencil\"></span> Modifier</h3></a>
		                </section>

	</div></div></div>";
	};
	
    //     }else if($AAAA = date("Y")) {
    //         if ($MM > date("m")) {
    //          $msg= "Non disponible !";
    //         }else if($MM = date("m")) {
    //             if ($JJ > date("d")) {
    //                 $msg= "Non disponible !";
    //             };
    //         };
    //     };
	 
    // if(isset($GLOBALS['msg'])) {
    //     echo "<td><div><a href=\"#\"><img width=\"400px\" height=\"240px\" src=\"" . $image . "\" /></a> <h4 color=\"red\">" . $msg . "</h4> </div></td><tr>";
    //  }; 
//     echo "<td><div><a data-toggle=\"modal\" data-target=\"#" . $id ."\"><img width=\"400px\" height=\"240px\" src=\"fichiers/" . $image . "\" /></a></div></td><tr>

// 	<div class=\"modal fade\" id=\"" . $id . "\"><div class=\"modal-dialog modal-lg\"><div class=\"modal-content\">

// 		<section class=\"modal-header\">
// 			<button class=\"btn btn-default close\" data-dismiss=\"modal\"><span style=\"font-size: 30px;\" class=\"glyphicon glyphicon-remove-circle\"></span></button>
// 			<h1 class=\"modal-title\" align=\"center\">" . $nom . "</h1>
// 		</section>
// 		<section class=\"modal-body\">"
				
// 				. $lien .

// 		"</section>
// 		<section class=\"modal-footer\">
// 			<a href=\"edit?id=" . $id . "\"><h3><span class=\"glyphicon glyphicon-pencil\"></span> Modifier</h3></a>
// 		</section>

// 	</div></div></div>";
 };
		echo "<div align=\"center\"  class=\"row\">";
		
		#CALCUL-YEAR
		if(date("n")>8){$GLOBALS['year']=date("y")."-".(date("y")+1);
		}else if(date("n")==8 && date("j")>25){$GLOBALS['year']=date("y")."-".(date("y")+1);
		}else{$GLOBALS['year']=(date("y")-1)."-".date("y");}
		
		   include "../connect.php";
		        $sql = 'SELECT `id`,`nom`,`sujet`,`matiere`,`image`,`lien`,`time` FROM `projet` WHERE year="'.$GLOBALS['year'].'" ORDER BY `id` DESC';
                $result = $connect->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                        while($row = $result->fetch_assoc()) {
                            projet($row["id"], $row["nom"], $row["sujet"], $row["matiere"], $row["image"], $row["lien"], $row["time"]);
                            // "<iframe src='https://onedrive.live.com/embed?resid=1E6C6C4F20CE90B2%21194&authkey=%21AHIcw-C9aM5qvZE&em=2&wdAr=1.7777777777777777' width='610px' height='367px' frameborder='0'>Ceci est un document <a target='_blank' href='https://office.com'>Microsoft Office</a> incorporé, optimisé par <a target='_blank' href='https://office.com/webapps'>Office Online</a>.</iframe>"
                            }
                    } else {
                        echo "<h1>-</h1>";
                        };
//  $connect->close();
 /*echo '</div><h1>Année précédente</h1>'."<div align=\"center\"  class=\"row\">";
 		        $sql = 'SELECT `id`,`nom`,`sujet`,`matiere`,`image`,`lien`,`time` FROM `projet` WHERE id<9 ORDER BY `id` DESC';
                $result = $connect->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                        while($row = $result->fetch_assoc()) {
                            projet($row["id"], $row["nom"], $row["sujet"], $row["matiere"], $row["image"], $row["lien"], $row["time"]);
                            // "<iframe src='https://onedrive.live.com/embed?resid=1E6C6C4F20CE90B2%21194&authkey=%21AHIcw-C9aM5qvZE&em=2&wdAr=1.7777777777777777' width='610px' height='367px' frameborder='0'>Ceci est un document <a target='_blank' href='https://office.com'>Microsoft Office</a> incorporé, optimisé par <a target='_blank' href='https://office.com/webapps'>Office Online</a>.</iframe>"
                            }
                    } else {
                        echo "<h1>-</h1>";
                        };*/
            if(isset($GLOBALS['redir'])&&$GLOBALS['redir']!=false){echo 'ÇA FONCTIONNE';
                $sql2 = 'SELECT `vlien` FROM `projet` WHERE `id`='.$_GET['id'];
                $result2 = $connect->query($sql2);
                        if ($result2->num_rows > 0) {
                    // output data of each row
                        while($row2 = $result2->fetch_assoc()) {
                            echo '<meta http-equiv="refresh" content="5;URL='.$row2["vlien"].'">';
                            // "<iframe src='https://onedrive.live.com/embed?resid=1E6C6C4F20CE90B2%21194&authkey=%21AHIcw-C9aM5qvZE&em=2&wdAr=1.7777777777777777' width='610px' height='367px' frameborder='0'>Ceci est un document <a target='_blank' href='https://office.com'>Microsoft Office</a> incorporé, optimisé par <a target='_blank' href='https://office.com/webapps'>Office Online</a>.</iframe>"
                            }
                    } else {
                        echo "<h1>-</h1>";
                    };
                    };

 $connect->close();
		   
		  // projet("1", "New York", "Projet m&#233;tropole", "G&#233;ographie", "<iframe src='https://onedrive.live.com/embed?resid=1E6C6C4F20CE90B2%21194&authkey=%21AHIcw-C9aM5qvZE&em=2&wdAr=1.7777777777777777' width='610px' height='367px' frameborder='0'>Ceci est un document <a target='_blank' href='https://office.com'>Microsoft Office</a> incorporé, optimisé par <a target='_blank' href='https://office.com/webapps'>Office Online</a>.</iframe>", "New-York.jpg", "1509998379"); 
		  // https://1drv.ms/p/s!ArKQziBPbGwegULnniaUD2wwyT67
		  ;
		   ?>

		</div>
		
	</div>


	<br><br><br><br><br><br><br><br><br><br>
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
			<?php include "../formulaire_de_contact.php"; ?>
		</section>

	</div></div></div>

<br><br><br>

		<br><br><br>

<footer style="position:sticky;bottom:0;"><div align="center"><h3 style="background-color:yellow;">ADam <?php echo date("Y"); ?></h3></div></footer>
</div></body>
</html>