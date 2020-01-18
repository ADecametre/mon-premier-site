<!DOCTYPE html>
<html>
<head>
    <title>Ralph's blog</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
    <style>
        body{
            background-image: url("SOS.jpg");
            background-repeat: no-repeat, repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        #title{
            font-size:50px;
        }
        h1 small{
            color:black;
        }
        h2 small{
            color:black;
        }
        .sha_down{
            text-shadow:0px 7px 7px grey;
        }
        .b_sha_down{
            box-shadow:0px 7px 7px grey;
        }
        .sha{
            text-shadow:0px 0px 20px black;
        }
        .b_sha{
            box-shadow:0px 0px 20px black;
        }
        .sha_up{
            text-shadow:0px -7px 7px grey;
        }
        .b_sha_up{
            box-shadow:0px -7px 7px grey;
        }
        .line {
            text-decoration:line-through;
            color:black;
        }
        #top {
            background-color:red;
            border-style: ridge;
            border-width: 5px;
            border-radius: 16px;
            margin: 0% 20% 0% 20%;
        }
        #content {
            margin: 0% 15% 0% 15%;
        }
        .subject{
            background-color:yellow;
            border-style: outset;
            border-width: 3px;
            border-radius: 16px;
        }
    </style>
</head>
<body>
    
    </br>
    
    <section id="top" class="b_sha" align="center">
        <h1 id="title" class="sha_down b_sha_down">R<small>ALPH</small></h1>
        <!--<b class="line sha">---------------------------------------</b>-->
        <h2 class="sha_up">T<small>HE</small> B<small>LOG</small></h2>
    </section>
    </br>
    
    <?php require "data-1.php"; ?>
    
    <?php if(isset($_GET['n'])){
            switch($_GET['n']){
                case 0:
                    echo '<meta http-equiv="refresh" content="3;URL=?n=1"><!--';
                    break;
                case 1:
                    echo '<div class="subject"><h3>'.$intro.'</h3></br>
                        <h4 style="margin-left:10%;text-decoration:underline overline;"><a href="/mes-presentations-orales/ralph\'s-blog/?n=2">|E<small>NTER</small>|</a></h4></div><!--';
                    break;
            }
            }
            else{echo '<meta http-equiv="refresh" content="3;URL=?n=1"><!--';}
            ?>
    <section id="content" class="b_sha" align="center">
        
        <?php function subject ($id, $titre, $text) {
        echo "<div class=\"modal fade\" id=\"" . $id . "\"><div class=\"modal-dialog modal-lg\"><div class=\"modal-content\">

		                <section class=\"modal-header\">
			                <button class=\"btn btn-default close\" data-dismiss=\"modal\"><span style=\"font-size: 30px;\" class=\"glyphicon glyphicon-remove-circle\"></span></button>
			                <h1 class=\"modal-title\" align=\"center\"><b>" . $titre . "</b></h1>
		                </section>
		                <section align=\"left\" class=\"modal-body\">
		                    <div>
				                <h3>$text</h3>
				            </div>
		                </section>
		                <section class=\"modal-footer\">
		                    <div align=\"center\">
		                        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><h2>
		                        ";if($id!=1/* && $id!=101 && $id!=201*/){echo "<a data-toggle=\"modal\" data-target=\"#"; echo $id-1/*-1+100*/; echo "\" data-dismiss=\"modal\"><span class=\" glyphicon glyphicon glyphicon-arrow-left\"></span></a>";};echo "
		                        </h2></div><div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\"><h2>
		                        ";if($id!=$GLOBALS['n_subject']/* && $id!=100+$GLOBALS['n_subject'] && $id!="200".$GLOBALS['n_subject']*/){echo "<a data-toggle=\"modal\" data-target=\"#"; echo $id+1; echo "\" data-dismiss=\"modal\"><span class=\" glyphicon glyphicon glyphicon-arrow-right\"></span></a>";};echo "
		                        </h2></div>
		                    </div>
		                </section>

	</div></div></div>"; };
	        //subject(1, "LOL 1", "TROLL HAHAHA !");
	    ?>
        
        <?php function a($lid, $ltitre){
            echo '<div class="subject col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a data-toggle="modal" data-target="#'.$lid.'"><h3>'.$ltitre.'</h3></a>
        </div>';
        };
            //a(1, "LOL 1");
        ?>
        
        <?php require "data.php"; ?>
        
    </section>
    <?php if(isset($_GET['n']) || $_GET['n']<2){}
            else{echo '-->';}
            ?>
    
</body>
</html>