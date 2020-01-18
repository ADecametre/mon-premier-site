<?php
ini_set("session.cookie_domain", ".a-decametre.tk");
session_start();
$predefault='
    <style>
        body {
            margin: 5% 10px 5% 10px;
        }
        #ND {
    		border-style: outset;
    		border-width: 10px;
    		}
    	#ND2 {
    		border-style: outset;
    		border-width: 10px;
    		}
    	#ND2M {
    		border-style: outset;
    		border-width: 10px;
    		}
    	h1 {
    	    font-family: cursive;
    	}
    	h3 {
    	    font-family: sans-serif;
    	    margin: 20px 20% 20px 20%;
    	}
    </style>
    
    <body onload="document.getElementById(\'foo\').select();">
    	<div id="ND" style="background-color: green;"><br>
    		<h1 align="center">Accéder à la prochaine version</h1>
    	</div>
    
    	<div id="ND" align="center" style="background-color: green;">
';
$default='
    <h2>Mot de passe :</h2>
    <form method="post">
        <input id="foo" name="password" type="password" width="50%" height="5%" required>
        <input type="submit" value="Ok">
    </form>
    <h5><a href="mailto:contact@a-decametre.tk?subject=Demande%20d&#39;accès%20pour%20la%20version%20beta&body=Je%20voudrais%20avoir%20acc&#232;s%20&#224;%20la%20version%20beta%20pour%20[&#183;&#183;&#183;].">Demander un mot de passe</a></h5>
';
if(isset($_SESSION['code'])){
    require '../connect.php';
    $sql = "SELECT * FROM beta WHERE `code`='".$_SESSION['code']."'";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        $code_verr=false;
        while($row = $result->fetch_assoc()) {
            if($_SESSION['code']==$row['code'] && $row['act']!="false"){
                    $code_verr=true;
                    if($row['st']<time() && ($row['fi']>time() || $row['fi']=="8")){
                        $_SESSION['code']=$row['code'];
                        $_SESSION['st']=$row['st'];
                        $_SESSION['fi']=$row['fi'];
                        
                        echo $predefault;
                        echo '<br><br><iframe width="80%" height="150px" src="/beta/time.php?n=fi&v='.$row['fi'].'"></iframe>';
                        echo '<br><br>
                            <button onclick="window.open(\'http://beta.a-decametre.tk\');">Ouvrir</button>
                            &nbsp;&nbsp;&nbsp;
                            <button onclick="window.location.href = \'/beta/log-out\';">Quitter</button>
                                <br><br>&nbsp;';
                    }else if($row['st']>time()){
                        echo $predefault;
                        echo '<meta http-equiv="refresh" content="'.($row['st']-time()+3).'">';
                        echo '<iframe width="80%" height="150px" src="/beta/time.php?n=st&v='.$row['st'].'"></iframe>';
                    }else{
                        echo $predefault;
                        echo '<iframe width="80%" height="150px" src="/beta/time.php?n=fi&v='.$row['fi'].'"></iframe>';
                    }
                    
                    //echo '<br><br>'.$row['code']." | ".$row['act']." | ".$row['st']." | ".$row['fi'];
                    //echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    //var_dump($_SESSION);
            }
        }
        if($code_verr!=true){
            echo '<script> alert("Mot de passe incorrect"); </script>';
            echo $predefault.$default;
        }
    }else{
        echo '<script> alert("Mot de passe incorrect"); </script>';
            echo $predefault.$default;
    }
    $connect->close();
}else if(isset($_POST['password'])){
    require '../connect.php';
    $sql = "SELECT * FROM beta";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        $code_verr=false;
        while($row = $result->fetch_assoc()) {
            if($_POST['password']==$row['code'] && $row['act']!="false"){
                    $code_verr=true;
                    if($row['st']<time() && ($row['fi']>time() || $row['fi']=="8")){
                        $_SESSION['code']=$row['code'];
                        $_SESSION['st']=$row['st'];
                        $_SESSION['fi']=$row['fi'];
                        
                        echo $predefault;
                        echo '<br><br><iframe width="80%" height="150px" src="/beta/time.php?n=fi&v='.$row['fi'].'"></iframe>';
                        echo '<br><br>
                            <button onclick="window.open(\'http://beta.a-decametre.tk\', \'blank\');">Ouvrir</button>
                            &nbsp;&nbsp;&nbsp;
                            <button onclick="window.location.href = \'/beta/log-out\';">Quitter</button>
                                <br><br>&nbsp;';
                    }else if($row['st']>time()){
                        echo $predefault;
                        echo '<meta http-equiv="refresh" content="'.($row['st']-time()+3).'">';
                        echo '<iframe width="80%" height="150px" src="/beta/time.php?n=st&v='.$row['st'].'"></iframe>';
                    }else{
                        echo $predefault;
                        echo '<iframe width="80%" height="150px" src="/beta/time.php?n=fi&v='.$row['fi'].'"></iframe>';
                    }
                    
                    //echo '<br><br>'.$row['code']." | ".$row['act']." | ".$row['st']." | ".$row['fi'];
                    //echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    //var_dump($_SESSION);
            }
        }
        if($code_verr!=true){
            echo '<script> alert("Mot de passe incorrect"); </script>';
            echo $predefault.$default;
        }
    }
    $connect->close();
}else{
    echo $predefault.$default;
};
//var_dump($_SESSION);
echo '</div></body>';
?>