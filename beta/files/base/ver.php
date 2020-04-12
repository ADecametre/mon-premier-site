<?php // $_GET['b_page']="/files/base/ver.php";require 'c-beta.php';if($_GLOBALS['b_stop']==true){return;}
// require "c-ini.php";
// <meta charset="utf-8">
// <meta name="viewport" content="width=device-width, initial-scale=1">
// <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
// <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
// <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
// <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
// <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
if($_GET['i']=="css"){
?>
<style>
    ul.lev1{
        list-style-type:disc;
        margin: auto 5% auto 5%;
    }
    li.lev1{
        font-size:x-large;
    }
    ul.lev2{
        list-style-type:square;
    }
    li.lev2{
        font-size:small;
    }
    
    h3.f_vers{
        max-width:600px;padding:5px;margin-top:10px;margin-bottom:-7px;background-color:rgba(127.5, 127.5, 127.5, 0.05);border:0.5px solid black;border-radius:20px;
    }
    div.f_vers{
        max-width:600px;padding:5px;background-color:rgba(127.5, 127.5, 127.5, 0.05);border:0.5px solid black;border-top:none;border-bottom-right-radius:20px;border-bottom-left-radius:20px;border-top-right-radius:5px;border-top-left-radius:5px;
    }
    a.f_vers{
        color:grey;
    }
    a.f_vers:hover{
        color:lightgrey;
    }
    h3.a_vers{
        max-width:600px;padding:5px;margin-top:10px;margin-bottom:-7px;background-color:rgba(0, 255, 0, 0.05);border:0.5px solid black;border-radius:20px;
    }
    div.a_vers{
        max-width:600px;padding:5px;background-color:rgba(0, 255, 0, 0.05);border:0.5px solid black;border-top:none;border-bottom-right-radius:20px;border-bottom-left-radius:20px;border-top-right-radius:5px;border-top-left-radius:5px;
    }
    a.a_vers{
        color:green;
    }
    a.a_vers:hover{
        color:lightgreen;
    }
    h3.p_vers{
        max-width:600px;padding:5px;margin-top:10px;margin-bottom:-7px;background-color:rgba(0, 0, 255, 0.05);border:0.5px solid black;border-radius:20px;
    }
    div.p_vers{
        max-width:600px;padding:5px;background-color:rgba(0, 0, 255, 0.05);border:0.5px solid black;border-top:none;border-bottom-right-radius:20px;border-bottom-left-radius:20px;border-top-right-radius:5px;border-top-left-radius:5px;
    }
    a.p_vers{
        color:blue;
    }
    a.p_vers:hover{
        color:lightblue;
    }
    h6.svers{
        margin-top:15px;margin-left:50px;
    }
    div.row.f_vers{
        white-space: nowrap;padding:0px;background-color:rgba(127.5, 127.5, 127.5, 0.1);margin-bottom:5px;border:1px solid black;border-radius:20px;margin-left:25px;margin-right:25px;
    }
    div.row.a_vers{
        white-space: nowrap;padding:0px;background-color:rgba(0, 255, 0, 0.1);margin-bottom:5px;border:1px solid black;border-radius:20px;margin-left:25px;margin-right:25px;
    }
    div.row.p_vers{
        white-space: nowrap;padding:0px;background-color:rgba(0, 0, 255, 0.1);margin-bottom:5px;border:1px solid black;border-radius:20px;margin-left:25px;margin-right:25px;
    }
    div.col-1.vers{
        height:100%;border-right:0.75px solid grey;border-top-right-radius:15px;border-bottom-right-radius:15px;
    }
    div.col-3.vers{
        height:100%;border-right:0.75px solid grey;border-top-right-radius:15px;border-bottom-right-radius:15px;
    }
    h6.vw.vers{
         left:-5px;position:relative;top:2px;
    }
</style>
<?php }else if($_GET['i']=="js"){ ?>
<script>
$(document).ready(function(){
    <?php
    //  A   R   R   A   Y   S
    $GLOBALS["v"]=array();
    $GLOBALS["vv"]=array();
    $GLOBALS["vvc"]=array();
    $GLOBALS["v2"]=array();
    $GLOBALS["vc"]=array();
    $GLOBALS["vt"]=array();
    $GLOBALS["svn"]=array();
    $GLOBALS["x"]=-1;
    sql("SELECT `v` FROM `ver` ORDER BY `v` DESC", null, '
        $GLOBALS["x"]++;
        $GLOBALS["v"][$GLOBALS["x"]]=$row["v"];
        $GLOBALS["vv"][$GLOBALS["x"]]=substr($row["v"], 0, (strlen($row["v"])-strrpos($row["v"],".")+1));
        $GLOBALS["vvc"][$GLOBALS["x"]]=str_replace(".", "", $GLOBALS["vv"][$GLOBALS["x"]]);
    ');
    // $GLOBALS["vv"]=array_unique($GLOBALS['vv']);
    // $GLOBALS["vvc"]=array_unique($GLOBALS['vvc']);
    $GLOBALS["x"]=-1;
    foreach(array_unique($GLOBALS['vvc']) as $y => $x_value) {
        $GLOBALS["x"]++;
        $GLOBALS["vc"][$GLOBALS["x"]]=$x_value;
    }
    $GLOBALS["x"]=-1;
    foreach(array_unique($GLOBALS['vv']) as $y => $x_value) {
        $GLOBALS["x"]++;
        $GLOBALS["v2"][$GLOBALS["x"]]=$x_value;
    }
    $slide=array();
    $slide=$GLOBALS["vc"];
    // $slide=array(
    //     "20",
    //     "10",
    //     "21"
    // );
    
    // echo 'console.log("_________________________");';
    // echo 'console.log("_________________________");';
    $GLOBALS["x"]=count($GLOBALS['vvc'])-1;
    /*sql("SELECT `date` FROM `ver` ORDER BY `v` ASC", null, '
        if(date_create_from_format("d/m/y", date("d/m/y"))>=date_create_from_format("d/m/y", $row["date"]) && strpos($row["date"], "?")===false){
            $GLOBALS["slideO"]=$GLOBALS["vvc"][$GLOBALS["x"]];
            $GLOBALS["x"]--;
        }
    ');*/
    $GLOBALS["slideO"]=NULL;
    sql("SELECT `date` FROM `ver` ORDER BY `v` ASC", null, '
        //while($GLOBALS["slideO"]==NULL) {
            if(date_create_from_format("d/m/y", date("d/m/y"))>=date_create_from_format("d/m/y", $row["date"]) && strpos($row["date"], "?")===false){
                $GLOBALS["slideO"]=$GLOBALS["vvc"][$GLOBALS["x"]];
                // echo "console.log(\"    " . $row["date"]."  -  ".$GLOBALS["vvc"][$GLOBALS["x"]] . "\");";
                if(isset($GLOBALS["vvc"][$GLOBALS["x"]+1]) && isset($GLOBALS["vt"][ $GLOBALS["vvc"][$GLOBALS["x"]+1] ]) && $GLOBALS["vt"][ $GLOBALS["vvc"][$GLOBALS["x"]+1] ]=="a"){
                    $GLOBALS["vt"][ $GLOBALS["vvc"][$GLOBALS["x"]+1] ] = "p";
                }
                $GLOBALS["vt"][ $GLOBALS["vvc"][$GLOBALS["x"]] ] = "a";
                if(isset($GLOBALS["svn"][ $GLOBALS["vvc"][$GLOBALS["x"]] ])){
                    $GLOBALS["svn"][ $GLOBALS["vvc"][$GLOBALS["x"]] ]++;
                }else{
                    $GLOBALS["svn"][ $GLOBALS["vvc"][$GLOBALS["x"]] ]=0;
                }
            }else{
                // echo "console.log(\"" . "              x" . "\");";
                if(!isset($GLOBALS["vt"][ $GLOBALS["vvc"][$GLOBALS["x"]] ])){
                    $GLOBALS["vt"][ $GLOBALS["vvc"][$GLOBALS["x"]] ] = "f";
                }
                if(isset($GLOBALS["svn"][ $GLOBALS["vvc"][$GLOBALS["x"]] ])){
                    $GLOBALS["svn"][ $GLOBALS["vvc"][$GLOBALS["x"]] ]++;
                }else{
                    $GLOBALS["svn"][ $GLOBALS["vvc"][$GLOBALS["x"]] ]=0;
                }
            }
            $GLOBALS["x"]--;
        //}
    ');
    // echo 'console.log("_________________________");';
    // echo 'console.log("_________________________");';
    //$GLOBALS['slideO']=1;
    for($x = 0; $x < count($slide); $x++) {
        //$ptl[$x]=str_replace(".", "", $slide[$x]);
        echo '$("#s'.$slide[$x].'").slideUp();$("#sl'.$slide[$x].'").click(function(){ $("#s'.$slide[$x].'").slideDown();});';
            for($y = 0; $y < count($slide); $y++) {
                //$ptl[$x]=str_replace(".", "", $slide[$x]);
                if($y!=$x){
                    echo '$("#sl'.$slide[$x].'").click(function(){ $("#s'.$slide[$y].'").slideUp();});';
                }
            }
    }
    /*echo '$("#s200").slideUp();//$("#sl200").click(function(){ $("#s200").slideDown();});
    ';
    echo '$("#s210").slideUp();//$("#sl210").click(function(){ $("#s210").slideDown();});';*/
    
    echo '});</script>
<script>
    function slideO(){
        setTimeout(function(){
            $(document).ready(function(){
                $("#sl'./*$slide[*/$GLOBALS['slideO']/*]*/.'").click();
            });
        }, 1000);
    }
    ';
    ?>
</script><?php
// <script>
//     $(document).ready(function(){
//         $('#version').modal('show');
//         slideO();
//     });
// </script>
 }else if($_GET['i']=="html"){
/*
    echo '<b>$GLOBALS["v"]=</b>';
    var_dump($GLOBALS["v"]);
    echo '<b>;</b></br><b>$GLOBALS["vv"]=</b>';
    var_dump($GLOBALS["vv"]);
    echo '<b>;</b></br><b>$GLOBALS["vvc"]=</b>';
    var_dump($GLOBALS["vvc"]);
    echo '<b>;</b></br><b>$GLOBALS["vc"]=</b>';
    var_dump($GLOBALS["vc"]);
    echo '<b>;</b></br><b>$GLOBALS["v2"]=</b>';
    var_dump($GLOBALS["v2"]);
    echo '<b>;</b></br><b>$GLOBALS["vt"]=</b>';
    var_dump($GLOBALS["vt"]);
    echo '<b>;</b></br><b>$GLOBALS["svn"]=</b>';
    var_dump($GLOBALS["svn"]);
    echo '<b>;</b></br><b>$slide=</b>';
    var_dump($slide);
    echo '<b>;</b></br><b>$GLOBALS["slideO"]=</b>';
    var_dump($GLOBALS["slideO"]);
    echo '<b>;</b>';
*/
ol_echo('<!DOCTYPE html>
<body>
<!-- Version -->
<div class="modal fade" id="version">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="modal-title" align="center">Version</h2>
                <button type="button" class="close" data-dismiss="modal"><h2>&times;</h2></button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body" style="min-width:60vw;max-width:100%;">
                <ul class="lev1">');
                    
                    for($x=0;$x<count($GLOBALS['vc']); $x++){  ol_echo('
                    
                    <li class="lev1">
                        <div id="sl'.$GLOBALS['vc'][$x].'"><h3 class="vw '.$GLOBALS['vt'][ $GLOBALS['vc'][$x] ].'_vers"><a id="sl'.$GLOBALS['vc'][$x].'" href="#" class="'.$GLOBALS['vt'][ $GLOBALS['vc'][$x] ].'_vers">'.$GLOBALS['v2'][$x].'</a></h3></div>
                        <div id="s'.$GLOBALS['vc'][$x].'" class="'.$GLOBALS['vt'][ $GLOBALS['vc'][$x] ].'_vers">
                            <ul class="lev2">
                                <h5 class="vw"><i><u><small><small>VERSION ');
                                        switch($GLOBALS['vt'][ $GLOBALS['vc'][$x] ]){
                                            case "f":echo "FUTURE";break;
                                            case "a":echo "ACTUELLE";break;
                                            case "p":echo "ANTÉRIEURE";break;
                                        }
                                echo " - ";
                                    sql("SELECT `date` FROM `ver` WHERE `v`='".$GLOBALS['v2'][$x].".0'", null, '
                                        $num=["/01/", "/02/", "/03/", "/04/", "/05/", "/06/", "/07/", "/08/", "/09/", "/10/", "/11/", "/12/"];
                                        $name=[" janvier 20", " février 20", " mars 20", " avril 20", " mai 20", " juin 20", " juillet 20", " août 20", " septembre 20", " octobre 20", " novembre 20", " décembre 20"];
                                        echo str_replace($num, $name, $row["date"]);
                                        //echo $row["date"];
                                    ');
                                ol_echo('</small></small></u></i></h5>
                                <li class="lev2">
                                    <h6 class="vw">');
                                        ol_echo(sql("SELECT `desc`, `sdesc` FROM `ver` WHERE `v`='".$GLOBALS['v2'][$x].".0'", null, '
                                            echo str_replace("\'", "\\\\\'", $row["desc"]."<br><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["sdesc"]."</small>");')
                                        
                                    .'</h6>
                                </li>');
                                if(sql("SELECT `desc2` FROM `ver` WHERE `v`='".$GLOBALS['v2'][$x].".0'", "r", "desc2")!=NULL){
                                    ol_echo('
                                    <li class="lev2">
                                        <h6 class="vw">');
                                            ol_echo(sql("SELECT `desc2`, `sdesc2` FROM `ver` WHERE `v`='".$GLOBALS['v2'][$x].".0'", null, '
                                                echo str_replace("\'", "\\\\\'", $row["desc2"]."<br><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["sdesc2"]."</small>");')
                                        
                                        .'</h6>
                                    </li>');
                                }
                                if(sql("SELECT `desc3` FROM `ver` WHERE `v`='".$GLOBALS['v2'][$x].".0'", "r", "desc3")!=NULL){
                                    ol_echo('
                                    <li class="lev2">
                                        <h6 class="vw">');
                                            ol_echo(sql("SELECT `desc3`, `sdesc3` FROM `ver` WHERE `v`='".$GLOBALS['v2'][$x].".0'", null, '
                                                echo str_replace("\'", "\\\\\'", $row["desc3"]."<br><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["sdesc3"]."</small>");')
                                        
                                        .'</h6>
                                    </li>');
                                }
                            ol_echo('</ul>
                            
                            '); if($GLOBALS["svn"][ $GLOBALS['vc'][$x] ]>0){
                            echo '<h6 class="vw svers"><u><small><small><b>SOUS-VERSIONS</b></small></small></u></h6>';
                            };
                            
                            $GLOBALS["da"]=true;for($GLOBALS["y"]=$GLOBALS["svn"][ $GLOBALS['vc'][$x] ];$GLOBALS["y"]>0;$GLOBALS["y"]--){
                            
                                //    S   V       T   I   M   E
                                    
                                    sql("SELECT `date`, `desc`, `sdesc` FROM `ver` WHERE `v`='".$GLOBALS["vv"][$x].".".$GLOBALS["y"]."'", null, '
                                        
                                        echo \'<div align="center" class="row \';
                                        
                                        if(strpos($row["date"], "?")===false){
                                            
                                            switch(date_create_from_format("d/m/y", date("d/m/y"))<=>date_create_from_format("d/m/y", $row["date"])){
                                                case "1":
                                                    if($GLOBALS["da"]==true){echo "a";$GLOBALS["cv"]=$GLOBALS["vv"][$GLOBALS["x"]].".".$GLOBALS["y"];$GLOBALS["da"]=false;}else{echo "p";}
                                                    break;
                                                case "0":
                                                    if($GLOBALS["da"]==true){echo "a";$GLOBALS["cv"]=$GLOBALS["vv"][$GLOBALS["x"]].".".$GLOBALS["y"];$GLOBALS["da"]=false;}else{echo "p";}
                                                    break;
                                                default:
                                                    echo "f";
                                            };
                                        }else{echo "f";}
                                        
                                        ol_echo(\'_vers">
                                            <div class="col-1 vers">
                                                <h6 class="vw vers"><small><b>
                                                    .\'.$GLOBALS["y"].\'
                                                </b></small></h6>
                                            </div>
                                            <div class="col-3 vers">
                                                <h6 class="vw"><i><u><small><small><small>
                                                    \'.$row["date"].\'
                                                </small></small></small></u></i></h6>
                                            </div>
                                            <div class="col-7 vers">
                                                <h6 class="vw"><small><small><small>
                                                    \'.str_replace("\'", "\\\\\'", $row["desc"]));
                                                if($row["sdesc"]!=""){echo \'&nbsp;&nbsp;<a data-toggle="tooltip" data-placement="right" data-html="true" title="<small><small><small><p><p><p>\'.str_replace("\'", "\\\\\'", $row["sdesc"]).\'</p></p></p></small></small></small>"><i style="opacity:0.66" class="fas fa-info-circle"></i></a>\';}
                                                ol_echo(\'</small></small></small></h6>
                                            </div>
                                        </div>
                                        \');
                                    ');
                                
                            
                             }; ol_echo('
                            
                        </div>
                    </li>
                    
                    '); };
                
            //         <li class="lev1">
            //             <div id="sl20"><h3 class="vw a_vers"><a id="sl20" class="a_vers" href="#">2.0</a></h3></div>
            //             <div id="s20" class="a_vers">
            //                 <ul class="lev2">
            //                     <h5 class="vw"><i><u><small><small>VERSION ACTUELLE - 15 février 2020</small></small></u></i></h5>
            //                     <li class="lev2">
            //                         <h6 class="vw">Redesign complet du site<br><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pages, logos, couleurs, animations, etc.</small></h6>
            //                     </li>
            //                     <li class="lev2">
            //                         <h6 class="vw">Recréation du système de la page <i>Projets</i><br><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;données, accès, etc.</small></h6>
            //                     </li>
            //                 </ul>
                            
            //                 <h6 class="vw svers"><u><small><small><b>SOUS-VERSIONS</b></small></small></u></h6>
                            
            //                 <div align="center" class="row p_vers">
            //                     <div class="col-1 vers">
            //                         <h6 class="vw vers"><small><b>
            //                             .1
            //                         </b></small></h6>
            //                     </div>
            //                     <div class="col-3 vers">
            //                         <h6 class="vw"><i><u><small><small><small>
            //                             24/02/2020
            //                         </small></small></small></u></i></h6>
            //                     </div>
            //                     <div class="col-7 vers">
            //                         <h6 class="vw" title="Bug dans l\\\'affichage de certaines images dans «Projets»"><small><small><small>
            //                             Correction d\\\'un bug
            //                         </small></small></small></h6>
            //                     </div>
            //                 </div>
                            
            //                 <div align="center" class="row a_vers">
            //                     <div class="col-1 vers">
            //                         <h6 class="vw vers"><small><b>
            //                             .2
            //                         </b></small></h6>
            //                     </div>
            //                     <div class="col-3 vers">
            //                         <h6 class="vw"><i><u><small><small><small>
            //                             29/02/2020
            //                         </small></small></small></u></i></h6>
            //                     </div>
            //                     <div class="col-7 vers">
            //                         <h6 class="vw" title="Ajout de la possibilité de partager un fichier PDF"><small><small><small>
            //                             Ajout d\\\'un élément dans <i>Accès</i>
            //                         </small></small></small></h6>
            //                     </div>
            //                 </div>
                            
            //                 <div align="center" class="row f_vers">
            //                     <div class="col-1 vers">
            //                         <h6 class="vw vers"><small><b>
            //                             .3
            //                         </b></small></h6>
            //                     </div>
            //                 <div class="col-3 vers">
            //                         <h6 class="vw"><i><u><small><small><small>
            //                             ??/03/2020
            //                         </small></small></small></u></i></h6>
            //                     </div>
            //                     <div class="col-7 vers">
            //                         <h6 class="vw" title="Ajout d\\\'un système de gestion des versions du site pour le créateur"><small><small><small>
            //                             Modification de <i>Version</i>
            //                         </small></small></small></h6>
            //                     </div>
            //                 </div>
                            
            //                 <div align="center" class="row f_vers">
            //                     <div class="col-1 vers">
            //                         <h6 class="vw vers"><small><b>
            //                             .4
            //                         </b></small></h6>
            //                     </div>
            //                     <div class="col-3 vers">
            //                         <h6 class="vw"><i><u><small><small><small>
            //                             ??/03/2020
            //                         </small></small></small></u></i></h6>
            //                     </div>
            //                     <div class="col-7 vers">
            //                         <h6 class="vw"><small><small><small>
            //                             Barre de navigation améliorée
            //                         </small></small></small></h6>
            //                     </div>
            //                 </div>
                            
            //                 <div align="center" class="row f_vers">
            //                     <div class="col-1 vers">
            //                         <h6 class="vw vers"><small><b>
            //                             .5
            //                         </b></small></h6>
            //                     </div>
            //                     <div class="col-3 vers">
            //                         <h6 class="vw"><i><u><small><small><small>
            //                             ??/03/2020
            //                         </small></small></small></u></i></h6>
            //                     </div>
            //                     <div class="col-7 vers">
            //                         <h6 class="vw"><small><small><small>
            //                             Ajout d\\\'animations entre les pages
            //                         </small></small></small></h6>
            //                     </div>
            //                 </div>
                            
            //                 <div align="center" class="row f_vers">
            //                     <div class="col-1 vers">
            //                         <h6 class="vw vers"><small><b>
            //                             .6
            //                         </b></small></h6>
            //                     </div>
            //                     <div class="col-3 vers">
            //                         <h6 class="vw"><i><u><small><small><small>
            //                             ??/03/2020
            //                         </small></small></small></u></i></h6>
            //                     </div>
            //                     <div class="col-7 vers">
            //                         <h6 class="vw"><small><small><small>
            //                             Ajout d\\\'animations dans <i>Projets</i>
            //                         </small></small></small></h6>
            //                     </div>
            //                 </div>
                            
            //             </div>
            //         </li>
                    
            //         <li class="lev1">
            //             <div id="sl10"><h3 class="vw p_vers"><a id="sl10" href="#" class="p_vers">1.0</a></h3></div>
            //             <div id="s10" class="p_vers">
            //                 <ul class="lev2">
            //                     <h5 class="vw"><i><u><small><small>VERSION ANTÉRIEURE - 1 mai 2017</small></small></u></i></h5>
            //                     <li class="lev2">
            //                         <h6 class="vw">Création du site A-Décamètre<br><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;première version</small></h6>
            //                     </li>
            //                 </ul>
                            
            //             </div>
            //         </li>-->
                    
            //     </ul>
            // </div>
            
            // <!-- Modal footer -->
            // <!--<div class="modal-footer">
            //     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            // </div>
ol_echo('            
        </div>
    </div>
</div>
</body>
');
$_GET["cv"]=$GLOBALS["cv"];
}else if($_GET['i']="v"){echo $_GET["cv"];}?>