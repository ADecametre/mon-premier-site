<?php $_GET['b_page']="/files/base/contact.php";require 'c-beta.php';if($_GLOBALS['b_stop']==true){return;}
if(isset($_POST['ename'])){
    $to = "bbrriiaadd@outlook.com";
    $subject = "Message via a-decametre.tk";
    
    if($_POST['ename']==""){
        $_POST['ename']='Anonyme';
    }
            
    $message = '
    <html>
    <body>
        <h2 style="margin-block-end:0;margin-bottom:0"><u>'.$_POST['esujet'].'</u></h2>
        <h4 style="margin-block-start:0;margin-top:0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>'.$_POST['ename'].' <small>('.$_POST['eemail'].')<small></i>
        </h4>
        <h3 style="font-weight:normal">'.$_POST['emessage'].'</h3>
    </body>
    </html>
    ';
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    if(isset($_POST['eemail'])){$headers .= 'From: '.$_POST['eemail'] . "\r\n";}
    
    mail($to,$subject,$message,$headers);
}





ol_echo('
    <div class="modal fade" id="contact">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="modal-title">Contacter le créateur</h2>
                    <button type="button" class="close" data-dismiss="modal"><h2>&times;</h2></button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <form id="emailme" method="post" action="">
                        <div class="row">
                            <div class="form-group col" style="display:inline-block">
                                <label for="ename">Nom :</label>
                                <input type="text" name="ename" class="form-control" maxlength="30">
                            </div>
                            <div class="form-group col" style="display:inline-block">
                                <label for="eemail">Email :</label>
                                <input type="email" name="eemail" class="form-control" maxlength="30">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name="esujet" class="form-control" placeholder="Objet*" style="margin-bottom:3px" maxlength="50" required>
                            <textarea name="emessage" rows="5" placeholder="Message*" class="form-control" maxlength="1500" required></textarea>
                        </div>
                    </form>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                        <button type="submit" form="emailme" class="btn btn-success">Envoyer</button>
                </div>
                
            </div>
        </div>
    </div>
');
?>