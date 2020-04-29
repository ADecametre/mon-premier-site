<?php $_GET['b_page']="/files/base/nav2.php";require 'c-beta.php';if($_GLOBALS['b_stop']==true){return;}
// $sl="";
// for ($x = (substr_count($_SERVER['PHP_SELF'],"/")-1); $x != 0; $x--){
//     $sl.="../";
// }

if($_GET['i']=='css'){ include $sl.'files/base/ver.php'; ?>
<style>
    #nav2{
        width:100%;
        position:sticky;
        bottom:0;
        z-index:99;
    }
    #nav2, #navd2{
        opacity:0;
    }
    #b_div{
        opacity:0;
    }
    #r{
        filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=2);  /* IE6,IE7 */
        ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)"; /* IE8 */
        -moz-transform: rotate(-180deg);  /* FF3.5+ */
        -o-transform: rotate(-180deg);  /* Opera 10.5 */
        -webkit-transform: rotate(-180deg);  /* Safari 3.1+, Chrome */
    }
    /*ul.lev1{
        list-style-type:disc;
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
        white-space: nowrap;padding:0px;background-color:rgba(127.5, 127.5, 127.5, 0.1);margin-bottom:5px;border:1px solid black;border-radius:20px;margin-left:25px;margin-right:25px;
    }
    div.col-1.vers{
        height:100%;border-right:0.75px solid grey;border-top-right-radius:15px;border-bottom-right-radius:15px;
    }
    div.col-3.vers{
        height:100%;border-right:0.75px solid grey;border-top-right-radius:15px;border-bottom-right-radius:15px;
    }
    h6.vw.vers{
         left:-5px;position:relative;top:2px;
    }*/
</style>
<?php }else if($_GET['i']=='js'){ include $sl.'files/base/ver.php';include $sl.'files/base/beta.php'; ?>
<script>
$(document).ready(function(){
    setTimeout(function(){
        $("#nav2, #navd2").fadeTo(500, 1);
    }, 1250);
    /*function slide(id){
        $('#'+id).slideToggle();
    }
    function slideO(id){
        setTimeout(function(){
            $('#'+id).slideDown();
        }, 1500);
    }*/
    <?php
        /*$slide=array(
            "20",
            "10",
            "21"
        );
        $slideO=1;
        for($x = 0; $x < count($slide); $x++) {
            //$ptl[$x]=str_replace(".", "", $slide[$x]);
            echo '$("#s'.$slide[$x].'").slideUp();$("#sl'.$slide[$x].'").click(function(){ $("#s'.$slide[$x].'").slideDown();});';
                for($y = 0; $y < count($slide); $y++) {
                    //$ptl[$x]=str_replace(".", "", $slide[$x]);
                    if($y!=$x){
                        echo '$("#sl'.$slide[$x].'").click(function(){ $("#s'.$slide[$y].'").slideUp();});';
                    }
                }
        }*/
        /*echo '$("#s200").slideUp();//$("#sl200").click(function(){ $("#s200").slideDown();});
        ';
        echo '$("#s210").slideUp();//$("#sl210").click(function(){ $("#s210").slideDown();});';*/
        /*echo '});</script><script>
        function slideO(){
            setTimeout(function(){
                $(document).ready(function(){
                    $("#s'.$slide[0].'").slideDown();
                });
            }, 1000);
        }
        ';*/
        if(isset($_POST['ename'])){echo 'alert("Email envoyé !");';}
    ?>
});
</script>
<?php }else if($_GET['i']=='html'){ echo preg_replace( "/\s+/", " ", '
<div style="min-height:50px"></div>
<div id="navd2">'.
    
    // <!-- Version -->
    // <div class="modal fade" id="version">
    //     <div class="modal-dialog modal-lg">
    //         <div class="modal-content">
                
    //             <!-- Modal Header -->
    //             <div class="modal-header">
    //                 <h2 class="modal-title" align="center">Version</h2>
    //                 <button type="button" class="close" data-dismiss="modal"><h2>&times;</h2></button>
    //             </div>
                
    //             <!-- Modal body -->
    //             <div class="modal-body" style="align-self:center;min-width:40vw;max-width:100%;">
    //                 <ul class="lev1">
                        
    //                     <li class="lev1">
    //                         <div id="sl21"><h3 class="vw f_vers"><a id="sl21" href="#" class="f_vers">2.1</a></h3></div>
    //                         <div id="s21" class="f_vers">
    //                             <ul class="lev2">
    //                                 <h5 class="vw"><i><u><small><small>VERSION FUTURE - 15 mars 2020</small></small></u></i></h5>
    //                                 <li class="lev2">
    //                                     <h6 class="vw">Ouverture de la page <i>Programmes</i><br><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;regroupant quelques créations de l\\\'auteur</small></h6>
    //                                 </li>
    //                             </ul>
                                
    //                             <h6 class="vw svers" style="display:none;"><u><small><small><b>SOUS-VERSIONS</b></small></small></u></h6>
                                
    //                             <div align="center" class="row f_vers" style="display:none;">
    //                                 <div class="col-1 vers">
    //                                     <h6 class="vw vers"><small><b>
    //                                         .1
    //                                     </b></small></h6>
    //                                 </div>
    //                                 <div class="col-3 vers">
    //                                     <h6 class="vw"><i><u><small><small><small>
    //                                         02/02/2020
    //                                     </small></small></small></u></i></h6>
    //                                 </div>
    //                                 <div class="col-7 vers">
    //                                     <h6 class="vw"><small><small><small>
    //                                         Bla bla bla bla bla bla
    //                                     </small></small></small></h6>
    //                                 </div>
    //                             </div>
                                
    //                         </div>
    //                     </li>
                    
    //                     <li class="lev1">
    //                         <div id="sl20"><h3 class="vw a_vers"><a id="sl20" class="a_vers" href="#">2.0</a></h3></div>
    //                         <div id="s20" class="a_vers">
    //                             <ul class="lev2">
    //                                 <h5 class="vw"><i><u><small><small>VERSION ACTUELLE - 15 février 2020</small></small></u></i></h5>
    //                                 <li class="lev2">
    //                                     <h6 class="vw">Redesign complet du site<br><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pages, logos, couleurs, animations, etc.</small></h6>
    //                                 </li>
    //                                 <li class="lev2">
    //                                     <h6 class="vw">Recréation du système de la page <i>Projets</i><br><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;données, accès, etc.</small></h6>
    //                                 </li>
    //                             </ul>
                                
    //                             <h6 class="vw svers"><u><small><small><b>SOUS-VERSIONS</b></small></small></u></h6>
                                
    //                             <div align="center" class="row p_vers">
    //                                 <div class="col-1 vers">
    //                                     <h6 class="vw vers"><small><b>
    //                                         .1
    //                                     </b></small></h6>
    //                                 </div>
    //                                 <div class="col-3 vers">
    //                                     <h6 class="vw"><i><u><small><small><small>
    //                                         24/02/2020
    //                                     </small></small></small></u></i></h6>
    //                                 </div>
    //                                 <div class="col-7 vers">
    //                                     <h6 class="vw" title="Bug dans l\\\'affichage de certaines images dans «Projets»"><small><small><small>
    //                                         Correction d\\\'un bug
    //                                     </small></small></small></h6>
    //                                 </div>
    //                             </div>
                                
    //                             <div align="center" class="row a_vers">
    //                                 <div class="col-1 vers">
    //                                     <h6 class="vw vers"><small><b>
    //                                         .2
    //                                     </b></small></h6>
    //                                 </div>
    //                                 <div class="col-3 vers">
    //                                     <h6 class="vw"><i><u><small><small><small>
    //                                         29/02/2020
    //                                     </small></small></small></u></i></h6>
    //                                 </div>
    //                                 <div class="col-7 vers">
    //                                     <h6 class="vw" title="Ajout de la possibilité de partager un fichier PDF"><small><small><small>
    //                                         Ajout d\\\'un élément dans <i>Accès</i>
    //                                     </small></small></small></h6>
    //                                 </div>
    //                             </div>
                                
    //                             <div align="center" class="row f_vers">
    //                                 <div class="col-1 vers">
    //                                     <h6 class="vw vers"><small><b>
    //                                         .3
    //                                     </b></small></h6>
    //                                 </div>
    //                                 <div class="col-3 vers">
    //                                     <h6 class="vw"><i><u><small><small><small>
    //                                         ??/03/2020
    //                                     </small></small></small></u></i></h6>
    //                                 </div>
    //                                 <div class="col-7 vers">
    //                                     <h6 class="vw" title="Ajout d\\\'un système de gestion des versions du site pour le créateur"><small><small><small>
    //                                         Modification de <i>Version</i>
    //                                     </small></small></small></h6>
    //                                 </div>
    //                             </div>
                                
    //                             <div align="center" class="row f_vers">
    //                                 <div class="col-1 vers">
    //                                     <h6 class="vw vers"><small><b>
    //                                         .4
    //                                     </b></small></h6>
    //                                 </div>
    //                                 <div class="col-3 vers">
    //                                     <h6 class="vw"><i><u><small><small><small>
    //                                         ??/03/2020
    //                                     </small></small></small></u></i></h6>
    //                                 </div>
    //                                 <div class="col-7 vers">
    //                                     <h6 class="vw"><small><small><small>
    //                                         Barre de navigation améliorée
    //                                     </small></small></small></h6>
    //                                 </div>
    //                             </div>
                                
    //                             <div align="center" class="row f_vers">
    //                                 <div class="col-1 vers">
    //                                     <h6 class="vw vers"><small><b>
    //                                         .5
    //                                     </b></small></h6>
    //                                 </div>
    //                                 <div class="col-3 vers">
    //                                     <h6 class="vw"><i><u><small><small><small>
    //                                         ??/03/2020
    //                                     </small></small></small></u></i></h6>
    //                                 </div>
    //                                 <div class="col-7 vers">
    //                                     <h6 class="vw"><small><small><small>
    //                                         Ajout d\\\'animations entre les pages
    //                                     </small></small></small></h6>
    //                                 </div>
    //                             </div>
                                
    //                             <div align="center" class="row f_vers">
    //                                 <div class="col-1 vers">
    //                                     <h6 class="vw vers"><small><b>
    //                                         .6
    //                                     </b></small></h6>
    //                                 </div>
    //                                 <div class="col-3 vers">
    //                                     <h6 class="vw"><i><u><small><small><small>
    //                                         ??/03/2020
    //                                     </small></small></small></u></i></h6>
    //                                 </div>
    //                                 <div class="col-7 vers">
    //                                     <h6 class="vw"><small><small><small>
    //                                         Ajout d\\\'animations dans <i>Projets</i>
    //                                     </small></small></small></h6>
    //                                 </div>
    //                             </div>
                                
    //                         </div>
    //                     </li>
                        
    //                     <li class="lev1">
    //                         <div id="sl10"><h3 class="vw p_vers"><a id="sl10" href="#" class="p_vers">1.0</a></h3></div>
    //                         <div id="s10" class="p_vers">
    //                             <ul class="lev2">
    //                                 <h5 class="vw"><i><u><small><small>VERSION ANTÉRIEURE - 1 mai 2017</small></small></u></i></h5>
    //                                 <li class="lev2">
    //                                     <h6 class="vw">Création du site A-Décamètre<br><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;première version</small></h6>
    //                                 </li>
    //                             </ul>
                                
    //                         </div>
    //                     </li>
                        
    //                 </ul>
    //             </div>
                
    //             <!-- Modal footer -->
    //             <!--<div class="modal-footer">
    //                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    //             </div>-->
                
    //         </div>
    //     </div>
    // </div>-->
    
    '<!-- À propos -->
    <div class="modal fade" id="about">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="modal-title">À propos</h2>
                    <button type="button" class="close" data-dismiss="modal"><h2>&times;</h2></button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <h5 class="vw">Aucun droit réservé. Site internet entièrement créé par Adam B. avec l\\\'aide d\\\'autres sites de référence, ainsi que de raccourcis jQuery et Bootstrap.</h5>
                    <ul class="lev1">
                        <li class="lev1">
                            <h3 class="vw">Conditions d\\\'utilisation<h3>
                                    <h5 class="vw">Cette œuvre d\\\'art et son auteur sont à respecter pour tout le travail qu\\\'a engendré le projet. En continuant votre navigation, vous acceptez l\\\'utilisation de biscuits.</h5>
                                    <h5 class="vw">Le créateur de ce site n\\\'est pas responsable des frais liés à la connexion Internet ou à l\\\'appareil utilisés par ses utilisateurs.</h5>
                                    <h5 class="vw">En cas de mauvaise utilisation ou d\\\'irrespect, l\\\'auteur se réserve le droit de donner une amande croquante ou même d\\\'exclure tout utilisateur.</h5>
                                    <h5 class="vw">Merci pour votre compréhension !</h5>
                        </li>
                        <li class="lev1">
                            <h3 class="vw">Pourquoi A-Décametre<h3>
                                    <h5 class="vw"><i>dam</i> dans <i>Adam</i> <small>(le nom de l\\\'auteur)</small>, étant l\\\'abréviation de <i>décamètre</i>, a été remplacé par ce mot pour former ce pseudonyme.</h5>
                        </li>
                    </ul>
                </div>
                
                <!-- Modal footer -->
                <!--<div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>-->
                
            </div>
        </div>
    </div>'.
    
    '<!-- Contact -->');
    include $sl.'files/base/contact.php';
    include $sl.'files/base/ver.php';
    echo '</div>';
    
    ol_echo('
    <div width="50%">'.
            /*<div align="center" class="inline" style="width:40%;margin-left:9.5%">
                <h6><a href="#version" data-toggle="modal" data-target="#version">Version 2.0.0</a></h6>
            </div>
            <div align="center" class="inline" style="width:40%;margin-right:9.5%">
                <h6><a href="#contact" data-toggle="modal" data-target="#contact">Contacter le créateur</a></h6>
            </div>
            <div class="just" style="margin-left:5%;margin-right:5%" width="100%">
                <h6><small>
                    Aucun droit réservé. Site internet entièrement créé par Adam B. avec l\\\'aide d\\\'autres sites de référence, ainsi que de raccourcis jQuery et Bootstrap.  Œuvre d\\\'art et auteur à respecter pour tout le travail qu\\\'a engendré ce projet, sous peine d\\\'amande croquante et d\\\'exclusion. En continuant votre navigation, vous acceptez l\\\'utilisation de biscuits. Le créateur de ce site n\\\'est pas responsable des frais liés à la connexion Internet ou à l\\\'appareil utilisés par ses utilisateurs. Merci pour votre compréhension !
                </small></h6>
            </div>*/
            '<table width="70%" style="margin-left:15%">
                <td width="33%">
                    <h6 class="text-center vw">
                        <a href="#" data-toggle="modal" data-target="#version" onclick="slideO()">Version ');
                            $_GET['i']="v";
                            include $sl.'files/base/ver.php';
                            $_GET['i']="html";
                            ol_echo('
                        </a>
                    </h6>
                </td>
                <td width="33%">
                    <h6 class="text-center vw">
                        <a href="#" data-toggle="modal" data-target="#about">À propos</a>
                    </h6>
                </td>
                <td width="33%">
                    <h6 class="text-center vw">
                        <a href="#" data-toggle="modal" data-target="#contact">Contacter le créateur</a>
                    </h6>
                </td>
            </table>
    </div>
    <br>
    ');
    
    echo '</div>';
    include $sl.'files/base/beta.php';
    

} ?>