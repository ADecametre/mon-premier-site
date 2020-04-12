<?php require '../files/base/c-ini.php'; $_GET['b_page']="/projets/index.php";require '../files/base/c-beta.php';if($_GLOBALS['b_stop']==true){return;} ?>
<!DOCTYPE html>
<html>
<head>
    <title>ADam</title>
    <?php require '../files/base/c-top.php'; ?>
</head>
<body id="body">
    <div id="content">
        <?php
        $GLOBALS['ppass']=0;
        if(isset($_POST['ppass'])){
            $GLOBALS['ppass']=false;
            if(sql('SELECT `code` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'" AND `act`=1 AND `st`<'.time().' AND `fi`>'.time(), 'nrow')>0){
                $GLOBALS['ppass']=sql('SELECT `acc` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'" AND `act`=1 AND `st`<'.time().' AND `fi`>'.time(), 'r', 'acc');
                $GLOBALS['p']=array(
                    "name"=>sql('SELECT `name` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'"', 'r', 'name'),
                    "v_html"=>sql('SELECT `v_html` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'"', 'r', 'v_html'),
                    "e_html"=>sql('SELECT `e_html` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'"', 'r', 'e_html'),
                    "v_link"=>sql('SELECT `v_link` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'"', 'r', 'v_link'),
                    "e_conv"=>sql('SELECT `e_conv` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'"', 'r', 'e_conv'),
                    "pdf"=>sql('SELECT `pdf` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'"', 'r', 'pdf'),
                    "e_one"=>sql('SELECT `e_one` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'"', 'r', 'e_one'),
                    "ed_one"=>sql('SELECT `ed_one` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'"', 'r', 'ed_one'),
                    "e_docx"=>sql('SELECT `e_docx` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'"', 'r', 'e_docx'),
                    "ed_docx"=>sql('SELECT `ed_docx` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'"', 'r', 'ed_docx'),
                    "e_pptx"=>sql('SELECT `e_pptx` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'"', 'r', 'e_pptx'),
                    "ed_pptx"=>sql('SELECT `ed_pptx` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'"', 'r', 'ed_pptx')
                    );
                    $GLOBALS['p']['name']=sql('SELECT `name` FROM `p_code` WHERE `code`="'.$_POST['ppass'].'"', 'r', 'name');
            }else{
                echo "
                <script>
                $(document).ready(function(){
                    $('#acc').modal('show');
                });
                </script>
                ";
            }
        }else if(isset($_GET['a']) && $_GET['a']==true){
            echo "<script>
            $(document).ready(function(){
                setTimeout(function(){
                    $('#acc').modal('show');
                }, 2000);
            });
            </script>";
        };
        
        if($GLOBALS['ppass']!==false && $GLOBALS['ppass']!==0){ ?>
        <?php //    A   V   E   C       M   O   T       D   E       P   A   S   S   E ?>
            
            <div>
                <table>
                    <tr>
                        <td style="width:30%">
                            <img class="img-fluid" src="/files/p_img/<?php
                                 if($GLOBALS['p']['name']==1){echo str_replace("?", "", sql('SELECT `name` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'r', 'name'));}; 
                            ?>.jpg">
                        </td>
                        <td style="width:60%;border-left:2px black solid">
                            <?php //if(!isset($_GET['p']) && $_GET['p']!=true){ ?>
                            <h1 style="margin-left:5%;font-size:3.5vw">
                                <?php if($GLOBALS['p']['name']==1){sql('SELECT `name` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'name');}else{echo "-";}; ?>
                            </h1>
                            <?php //}else{echo '<meta http-equiv="refresh" content="3;URL='.sql('SELECT `v_link` FROM `projets` WHERE `name`').'">';} ?>
                            <h2 style="margin-left:5%;font-size:2.5vw"><?php sql('SELECT `suj` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'suj') ?></h2>
                            <h3 style="margin-left:5%;font-size:2vw"><?php sql('SELECT `mat` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'mat') ?></h3>
                        </td>
                    </tr>
                </table>
                <br>
                <div align="center" style="width:90%;margin-left:5%;margin-right:5%;border:1px solid black;border-radius:20px"></div>
                <br>
                <div align="center">
                    <?php if($GLOBALS['p']['v_html']==1){
                        if(sql('SELECT `v_html` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'r', 'v_html')!=""){
                            sql('SELECT `v_html` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'v_html');
                        }else{
                            echo '<h3 style="font-size:2vw">AUCUN CONTENU DISPONIBLE POUR LE PUBLIC</h3>';
                        }
                    }; ?>
                </div>
            </div>
            
            <br>
            <div align="center" style="width:90%;margin-left:5%;margin-right:5%;border:1px solid black;border-radius:20px">
                <?php if($GLOBALS['p']['e_html']==1){sql('SELECT `e_html` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'e_html');}; ?>
            </div>
            <br>
            
                <?php
                    $plmar=$GLOBALS['p']['v_link']+$GLOBALS['p']['e_conv']+$GLOBALS['p']['e_one']+$GLOBALS['p']['e_docx']+$GLOBALS['p']['e_pptx'];
                    if($plmar==0){$plmar++;}
                    $GLOBALS['lmar']=100/$plmar/2;
                ?>
            <div class="row" align="center" style="margin-left:<?php echo $GLOBALS['lmar'] ?>%;margin-right:<?php echo $GLOBALS['lmar']/2 ?>%">
            <?php if($GLOBALS['p']['v_link']==1){ ?>
                <div width="75px" height="100px" class="col" align="left">
                    <a target="_blank" href="<?php sql('SELECT `v_link` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'v_link'); ?>">
                        <img src="../files/icons/view.png" width="75px" height="75px">
                    </a>
                </div>
            <?php };if($GLOBALS['p']['e_conv']==1){ ?>
                <div width="75px" height="100px" class="col" align="left">
                    <a target="_blank" href="<?php sql('SELECT `e_conv` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'e_conv'); ?>">
                        <img src="../files/icons/conv.png" width="75px" height="75px">
                    </a>
                </div>
            <?php };if($GLOBALS['p']['pdf']==1){ ?>
                <div width="75px" height="100px" class="col" align="left">
                    <a target="_blank" href="<?php sql('SELECT `pdf` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'pdf'); ?>">
                        <img src="../files/icons/pdf.png" width="75px" height="75px">
                    </a>
                </div>
            <?php };if($GLOBALS['p']['e_one']==1){ ?>
                <div width="75px" height="100px" class="col" align="left">
                    <a target="_blank" href="<?php sql('SELECT `e_one` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'e_one'); ?>">
                        <img src="../files/icons/onenote.png" width="75px" height="75px">
                        <img src="../files/icons/edit.png" width="25px" height="25px" style="position:absolute;left:75px;top:60px;border:3px solid black;border-radius:50%;background-color:white;vertical-align:bottom;">
                    </a>
                    <?php if($GLOBALS['p']['ed_one']==1){ ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php sql('SELECT `ed_one` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'ed_one'); ?>">
                            <img src="../files/icons/desktop.png" width="19.6px" height="16.8px">
                        </a>
                    <?php } ?>
                </div>
            <?php };if($GLOBALS['p']['e_docx']==1){ ?>
                <div width="75px" height="100px" class="col" align="left">
                    <a target="_blank" href="<?php sql('SELECT `e_docx` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'e_docx'); ?>">
                        <img src="../files/icons/word.png" width="75px" height="75px">
                        <img src="../files/icons/edit.png" width="25px" height="25px" style="position:absolute;left:75px;top:60px;border:3px solid black;border-radius:50%;background-color:white;vertical-align:bottom;">
                    </a>
                    <?php if($GLOBALS['p']['ed_docx']==1){ ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php sql('SELECT `ed_docx` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'ed_docx'); ?>">
                            <img src="../files/icons/desktop.png" width="19.6px" height="16.8px">
                        </a>
                    <?php } ?>
                </div>
            <?php };if($GLOBALS['p']['e_pptx']==1){ ?>
                <div width="75px" height="100px" class="col" align="left">
                    <a target="_blank" href="<?php sql('SELECT `e_pptx` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'e_pptx'); ?>">
                        <img src="../files/icons/powerpoint.png" width="75px" height="75px">
                        <img src="../files/icons/edit.png" width="25px" height="25px" style="position:absolute;left:75px;top:60px;border:3px solid black;border-radius:50%;background-color:white;vertical-align:bottom;">
                    </a>
                    <?php if($GLOBALS['p']['ed_pptx']==1){ ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php sql('SELECT `ed_pptx` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'ed_pptx'); ?>">
                            <img src="../files/icons/desktop.png" width="19.6px" height="16.8px">
                        </a>
                    <?php } ?>
                </div>
            <?php }; ?>
            </div>
        <?php }else if(isset($_GET['n']) && sql('SELECT `name` FROM `projets` WHERE `name`="'.str_replace("+", " ", $_GET['n']).'" && `st`<'.time(), 'nrow')>0){ ?>
        <?php //    D   I   S   P   O   N   I   B   L   E ?>
            
            <div>
                <table>
                    <tr>
                        <td style="width:30%">
                            <img class="img-fluid" src="/files/p_img/<?php echo str_replace("?", "", str_replace("+", " ", $_GET['n'])); ?>.jpg">
                        </td>
                        <td style="width:60%;border-left:2px black solid">
                            <?php //if(!isset($_GET['p']) && $_GET['p']!=true){ ?>
                            <h1 style="margin-left:5%;font-size:3.5vw"><?php echo str_replace("+", " ", $_GET['n']); ?></h1>
                            <?php //}else{echo '<meta http-equiv="refresh" content="3;URL='.sql('SELECT `v_link` FROM `projets` WHERE `name`').'">';} ?>
                            <h2 style="margin-left:5%;font-size:2.5vw"><?php sql('SELECT `suj` FROM `projets` WHERE `name`="'.$_GET['n'].'"', 'e', 'suj') ?></h2>
                            <h3 style="margin-left:5%;font-size:2vw"><?php sql('SELECT `mat` FROM `projets` WHERE `name`="'.$_GET['n'].'"', 'e', 'mat') ?></h3>
                        </td>
                    </tr>
                </table>
                <br>
                <div align="center" style="width:90%;margin-left:5%;margin-right:5%;border:1px solid black;border-radius:20px"></div>
                <br>
                <div align="center">
                    <?php
                        if(sql('SELECT `v_html` FROM `projets` WHERE `name`="'.$_GET['n'].'"', 'r', 'v_html')!=""){
                            sql('SELECT `v_html` FROM `projets` WHERE `name`="'.$_GET['n'].'"', 'e', 'v_html');
                        }else{
                            echo '<h3 style="font-size:2vw">AUCUN CONTENU DISPONIBLE POUR LE PUBLIC</h3>';
                        }
                    ?>
                </div>
            </div>
            
        <?php }else if(isset($_GET['s']) && sql('SELECT `suj` FROM `projets` WHERE `suj`="'.str_replace("+", " ", $_GET['s']).'"', 'nrow')>0){
            //  N   O   N   -   D   I   S   P   O   N   I   B   L   E
            
                //  P   R   E   S   /   S   U   J   -   D   I   S   P
                sql('SELECT `v_link`, `st`, `name` FROM `projets` WHERE `suj`="'.str_replace("+", " ", $_GET['s']).'"', null, '
                    if($row["st"]<time() && isset($_GET["p"]) && $_GET["p"]==true){
                        echo \'<meta http-equiv="refresh" content="7.5;URL=\'.$row["v_link"].\'">\';
                        echo \'<script>
                            $(document).ready(function(){
                                setTimeout(function(){
                                    $(".pre1, .pre2").fadeOut(0);
                                }, 0);
                                setTimeout(function(){
                                    $("#pre").modal("show");
                                }, 1750);
                                setTimeout(function(){
                                    $(".pre1").fadeIn(500);
                                }, 2000);
                                setTimeout(function(){
                                    $(".pre1").fadeOut(250);
                                }, 4500);
                                setTimeout(function(){
                                    $(".pre2").fadeIn(250);
                                }, 4750);
                                setTimeout(function(){
                                    $(".pre2").fadeOut(500);
                                }, 7000);
                                setTimeout(function(){
                                    $("#pre").modal("hide");
                                }, 7500);
                            });
                        </script>\';
                    }else if($row["st"]<time()){
                        echo \'<meta http-equiv="refresh" content="0;URL=?n=\'.$row["name"].\'">\';
                    }
                '); ?>
            
            <div>
                <table>
                    <tr>
                        <td style="width:30%">
                            <img class="img-fluid" src="">
                        </td>
                        <td style="width:60%;border-left:2px black solid">
                            <h1 style="margin-left:5%;font-size:3.5vw">-</h1>
                            <h2 style="margin-left:5%;font-size:2.5vw"><?php echo str_replace("+", " ", $_GET['s']); ?></h2>
                            <h3 style="margin-left:5%;font-size:2vw"><?php sql('SELECT `mat` FROM `projets` WHERE `suj`="'.$_GET['s'].'"', 'e', 'mat') ?></h3>
                        </td>
                    </tr>
                </table>
                <br>
                <div align="center" style="width:90%;margin-left:5%;margin-right:5%;border:1px solid black;border-radius:20px"></div>
                <br>
                <div align="center">
                    <h3 style="font-size:2vw">PAS ENCORE DISPONIBLE</h3>
                </div>
            </div>
            
        <?php }else{ ?>
        <?php //    A   U   C   U   N       P   R   O   J   E   T ?>
        
            <div class="row row-eq-height">
                <?php
                    $GLOBALS["y"]=array();$GLOBALS["x"]=0;
                    sql('SELECT `st` FROM `projets` WHERE `aff`<'.time().' && `fi`>'.time(), null, '$GLOBALS["y"][$GLOBALS["x"]]=$row["st"];$GLOBALS["x"]++;');
                    for ($x = count($GLOBALS["y"])-1; $x >= 0 ; $x--) {
                        //if( time()>sql('SELECT `aff` FROM `projets` WHERE `st`='.$y[$GLOBALS['x']], null, 'return $row["aff"];') && time()<sql('SELECT `en` FROM `projets` WHERE `st`='.$y[$GLOBALS['x']], null, 'return $row["en"];') ){
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="/*border:2px groove grey;border-radius:25px;*/ margin-top:10px; align-self:center;">
                        <a href="/projets/?<?php
                                if($GLOBALS["y"][$x]<time()){
                                    $GLOBALS['ns']="name";
                                    $GLOBALS['nsr']="n";
                                    $GLOBALS['nsb']="#46ff46";
                                }else{
                                    $GLOBALS['ns']="suj";
                                    $GLOBALS['nsr']="s";
                                    $GLOBALS['nsb']="#ffb5b5";
                                }
                                    sql('SELECT `'.$GLOBALS['ns'].'` FROM `projets` WHERE `st`='.$GLOBALS["y"][$x], '', 'echo "'.$GLOBALS['nsr'].'=".str_replace(" ", "+", $row["'.$GLOBALS['ns'].'"]);');
                            ?>">
                            <img src="/files/p_img/<?php if($GLOBALS["y"][$x]<time()){echo str_replace("?", "", sql('SELECT `name` FROM `projets` WHERE `st`='.$GLOBALS["y"][$x], 'r', 'name'));} ?>.jpg"
                                alt="<?php sql('SELECT `'.$GLOBALS['ns'].'` FROM `projets` WHERE `st`='.$GLOBALS["y"][$x], 'e', $GLOBALS['ns']) ?>"
                                title="<?php sql('SELECT `'.$GLOBALS['ns'].'` FROM `projets` WHERE `st`='.$GLOBALS["y"][$x], 'e', $GLOBALS['ns']) ?>"
                                class="img-fluid img-thumbnail" style="width:100%;height:auto;<?php echo 'background-color:'.$GLOBALS['nsb']; ?>"
                            />
                        </a>
                    </div>
                <?php
                        //}
                    }?>
                </div>
        
        <?php } ?>
            
        
        
        <br><br>
        <?php // C   A   D   E   N   A   S ?>
            
        <h5 style="font-size:2vw;" align="right">
            <?php if($GLOBALS['ppass']!==false && $GLOBALS['ppass']!==0){ // O   U   V   E   R   T ?>
                <a href="?s=<?php sql('SELECT `suj` FROM `projets` WHERE `name`="'.$GLOBALS['ppass'].'"', 'e', 'suj'); ?>" title="Verrouiller"><i class="fas fa-lock-open"></i></a>
            <?php }else{ // F   E   R   M   É ?>
                <a href="#" data-toggle="modal" data-target="#acc"><i class="fas fa-lock" title="Accéder"></i></a>
                <!--<svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="top:-1.5px;position:relative">
                    <rect width="11" height="9" x="4.5" y="8" rx="2"></rect>
                    <path fill-rule="evenodd" d="M6.5 5a3.5 3.5 0 117 0v3h-1V5a2.5 2.5 0 00-5 0v3h-1V5z" clip-rule="evenodd"></path>
                </svg>-->
            <?php } ?>
        </h5>
        
        <?php //    A   C   C    ?>
        <div class="modal fade" tabindex="-1" role="dialog" id="acc">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Accéder</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="pacc" method="post">
                            <input type="password" placeholder="Entrez votre code d'accès…" class="form-control<?php if($GLOBALS['ppass']===false){echo ' is-invalid';} ?>" size="10" maxlength="10" name="ppass">
                            <div id="incp" class="invalid-feedback">Code invalide</div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-toggle="modal" data-target="#contact" data-dismiss="modal"><p><small><small>Demander un code</small></small></p></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" form="pacc" class="btn btn-success">OK</button>
                    </div>
                </div>
            </div>
        </div>
    
        <?php //    P   R   E    ?>
        <div class="modal fade" tabindex="-1" role="dialog" id="pre">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body" align="center" style="padding-top:10%;padding-bottom:10%;min-height:400px">
                        <h1 class="pre1" style="margin-bottom:10%;font-size:5vw;"><?php echo str_replace("+", " ", $_GET['s']); ?></h1>
                        <h2 class="pre1" style="font-size:3vw;"><?php sql('SELECT `mat` FROM `projets` WHERE `suj`="'.$_GET['s'].'"', 'e', 'mat') ?></h2>
                        <h2 class="pre2" style="margin-bottom:10%;font-size:3vw;">RETROUVEZ CE PROJET SUR LE SITE</h2>
                        <h1 class="pre2" style="font-size:5vw;"><u><i>a-decametre.tk</i></u></h1>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</body>
    <?php require '../files/base/c-bot.php'; ?>
</html>