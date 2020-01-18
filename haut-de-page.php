<!DOCTYPE HTML>
<html>
<head>
<style>
table {
width: 80%;
}
.sticky {
  list-style-type: none;
  margin-right: 10%;
  margin-left: 10%;
  padding: 0;
  overflow: hidden;
  background-color:#1ff42e;
  position: sticky;
  top: 0;
  z-index: 10;
}

li {
  float: left;
}

td a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

td a:hover:not(.active) {
  background-color: #42f44e;
}

.active {
  background-color: #4CAF50;
}

.alert {
    background-color:yellow;
}
</style>
</head>
<body>
<div align="center" class="alert">
    <h4 style="margin-block-end: 0;margin-bottom:0"><b>La <u>version 2.0</u> sort officiellement le <u>15 février</u> <small><small>à 15:15:15</small></small></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <small><a href="#" data-toggle="modal" data-target="#version">En savoir plus</a></small></h4>
    <?php if(time()>1581192915){echo '<iframe width="90%" height="60px" src="/beta/time.php?v=1581797715" style="overflow:hidden" scrolling="no"></iframe>';} ?>
    
    <div class="modal fade" id="version">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="modal-title">Version 2.0
                    <button type="button" class="close" data-dismiss="modal">&times;</button></h2>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body" align="center">
                    <img src="/v2.png" class="img-responsive" width="75%">
                </div>
                
            </div>
        </div>
    </div>

</div>
<div align="center">
<img class="hidden-xs img-responsive" width="395px" src="/logo/ADam<?php echo date("Y"); ?>.jpg" alt="ADam <?php echo date("Y"); ?>" style="display:inline-table;">
<div align="left" style="display:inline-table;border-style:dotted dotted dotted ridge;border-width:0.5px 0.5px 0.5px 5px;">
    <?php
    if(!isset($_SESSION['name'])){
        echo '
        <button style="btn btn-default"><a href="/account/log-in/?src='.$_SERVER['REQUEST_URI'].'">Connexion</a></button>
        <button style="btn btn-default"><a href="/account/create/">Inscription</a></button>
        ';
    }else{
        echo '
        <h3>'.$_SESSION['name'].'</h3>
        <button style="btn btn-default"><a href="/account/">Compte</a></button>
        <button style="btn btn-default"><a href="/account/log-out/?src='.$_SERVER['REQUEST_URI'].'">Déconnexion</a></button>
        ';
    }
    ?>
    <h1>&nbsp</h1></br>
</div>
</div>

<table id="nav" border="3px" align="center" class="sticky">
    <!--<td><h4>Jeux</h4></td>-->
    <td align="center" width="33%"><a <?php if($_SERVER['REQUEST_URI']=="/mes-presentations-orales/"){echo ' class="active"';} ?> href="/mes-presentations-orales"><h4>Mes pr&#233;sentations orales</h4></a></td>
    <td align="center" width="34%">
        <a <?php if($_SERVER['REQUEST_URI']=="/"){echo ' class="active"';} ?> href="/">
            <div align="center" class="visible-xs" style="background-color:white;"><img class="img-responsive" width="118.5" src="/logo/ADam<?php echo date("Y"); ?>.jpg" alt="ADam <?php echo date("Y"); ?>"></div>
	        <h4 class="hidden-xs"><span class="glyphicon glyphicon-home"></span></h4>
        </a>
    </td>
    <td align="center" width="33%"><a <?php if($_SERVER['REQUEST_URI']=="/a-propos/"){echo ' class="active"';} ?> href="/a-propos"><h4>&#192; propos</h4></a></td>
</table>

<style>

</style>

<!--
<ul class="sticky">
  <li><a <?php if($_SERVER['REQUEST_URI']=="/mes-presentations-orales/"){echo ' class="active"';} ?> href="/mes-presentations-orales">Mes présentations orales</a></li>
  <li><a <?php if($_SERVER['REQUEST_URI']=="/"){echo ' class="active"';} ?> href="/"><span class="glyphicon glyphicon-home"></span><div class="visible-xs" style="background-color:white;"><img class="img-responsive" width="118.5" src="http://www.a-decametre.tk/ADam2017.jpg"></div></a></li>
  <li><a <?php if($_SERVER['REQUEST_URI']=="/a-propos/"){echo ' class="active"';} ?> href="/a-propos">À Propos</a></li>
  <li><a href="#about">Connexion</a></li>
</ul>
-->

</body>
</html>