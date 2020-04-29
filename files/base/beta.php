<?php
if($_GET['i']=='js'){
?>
    <script>
    $(document).ready(function(){
        $("#b_logout").slideUp(0);
        $("#b_div").fadeTo(125, 1);
        /*var beta = 0;
        $("#s20 div div h6 small small small small i").click(function(){
            beta++;
            // console.log("+ "+beta);
        });
        setInterval(function(){ 
            if(beta>=7){
                setTimeout(function(){ 
                    beta = 0;
                    // console.log("r "+beta);
                }, 5000);
            }else if(beta>0){
                beta--;
                // console.log("- "+beta);
            }
        }, 5000);
        setInterval(function(){ 
            if(beta>=7){
                beta = 27;
                $("#s20 div div h6 small small small small i").html('<a href="#" data-toggle="modal" data-target="#b_acc" data-dismiss="modal">BETA</a>');
                setTimeout(function(){ 
                    $("#s20 div div h6 small small small small i").html('BETA');
                }, 2000);
                // $("#version").modal("hide");
                // $("#b_acc").modal("show");
                // console.log("modal");
            }
        }, 2000);*/
        $("#b_div").hover(function(){
            $("#b_logout").slideDown();
            }, function(){
            $("#b_logout").slideUp();
        });/*
        <?php // if((isset($_COOKIE['beta']) || isset($_POST["b_ppass"])) && $GLOBALS['b_pass']==false){ ?>
            setTimeout(function(){
                $("#b_acc").modal("show");
            }, 2000);
        <?php // } ?>
        console.log("<?php // echo $_SERVER["SCRIPT_NAME"] ?>")*/
        <?php if(isset($GLOBALS['b_pass']) && $GLOBALS['b_pass']==false){
            echo 'setTimeout(function(){$("#b_acc").modal("show")},2000);';
        } ?>
    });
    </script>
<?php }else if($_GET['i']=='html'){
    ol_echo('
        <div class="modal fade" tabindex="-1" role="dialog" id="b_acc" aria-modal="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Accéder</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="b_pacc" method="post">
                            <input type="password" placeholder="Entrez votre code d\\\'accès…" class="form-control'); if($GLOBALS['b_pass']===false){echo ' is-invalid';} ol_echo('" size="10" maxlength="10" name="b_ppass">
                            <div id="b_incp" class="invalid-feedback">Code invalide</div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-toggle="modal" data-target="#contact" data-dismiss="modal"><p><small><small>Demander un code</small></small></p></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" form="b_pacc" class="btn btn-success">OK</button>
                    </div>
                </div>
            </div>
        </div>
    ');
    if($GLOBALS['b_pass']==true){
        ol_echo('
            <div id="b_div" style="width:30px;min-height:30px;position:fixed;top:0;right:0;background-color:darkgreen;z-index:9999;text-align:center;border:1px white ridge;border-radius:20%;color:white;box-shadow:0 0 12px 4px black">
                <small>
                    B<small>ETA</small>
                </small>
                <a href="?b_logout=true" style="color:lightblue">
                    <div id="b_logout" style="margin-top:-10px">
                        <small><small><small>
                            <i class="fas fa-lock-open"></i>
                        </small></small></small>
                    </div>
                </a>
            </div>
        ');
    }
};
?>