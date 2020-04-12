<?php
//      D   A   T   A   B   A   S   E
    function sql($sql, $info=null, $sel=null){
        $conn = new mysqli("localhost", "id1519675_mydata", "[REDACTED]", "id1519675_mydata");if($conn->connect_error){die("Connection failed: " . $conn->connect_error);}
        $result = $conn->query($sql);
        if($info=="nrow"){return $result->num_rows;}else{
            if($info=="e"){$sel='echo $row["'.$sel.'"];';}
            if ($result === FALSE) {
                echo "<b>ERREUR : </b>".$conn->error."<br>";
            }
            if($sel!=null){
                if ($result->num_rows > 0) {
                    if($info!=="r"){
                        while($row = $result->fetch_assoc()) {
                            eval($sel);
                        }
                    }else{
                        while($row = $result->fetch_assoc()) {
                            return $row[$sel];
                        }
                    }
                }
            }
        }
    }
//      S   L
    $sl="";
    for ($x = (substr_count($_SERVER['PHP_SELF'],"/")-1); $x != 0; $x--){
        $sl.="../";
    }
//      T   E   S   T       M   O   D   E
    if(!isset($_GET['test'])){
        $_GET['test']="";
    }else{
        $_GET['test']="t_";
    }
//      B   E   T   A       M   O   D   E
    if(isset($_POST["b_ppass"]) && sql('SELECT * FROM `b_code` WHERE `code`="'.$_POST["b_ppass"].'" AND `st`<'.time().' AND `fi`>'.time(), "nrow")>=1){
        setcookie("beta", $_POST["b_ppass"], time()+5*60, "/");
        die(header("Refresh:0"));
    }else if(isset($_COOKIE["beta"]) && sql('SELECT * FROM `b_code` WHERE `code`="'.$_COOKIE["beta"].'" AND `st`<'.time().' AND `fi`>'.time(), "nrow")>=1){
        $_GLOBALS['b']="(B) ";
        $GLOBALS['b_pass']=true;
        setcookie("beta", $_COOKIE["beta"], time()+5*60, "/");
    }else if(isset($_COOKIE["beta"]) || isset($_POST["b_ppass"])){
        $_GLOBALS['b']="";
        $GLOBALS['b_pass']=false;
    }else{
        $_GLOBALS['b']="";
        $GLOBALS['b_pass']=NULL;
    }
    
    if(isset($_GET['b_logout']) && $_GET['b_logout']==true){
        setcookie("beta", "", time()-3600, "/");
        header("Location:".str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]));
        die();
    }
//      O   L       E   C   H   O
    function ol_echo($echo, $r=false){
        if($r==true){
            return preg_replace( "/\s+/", " ", $echo);
        }else{
            echo preg_replace( "/\s+/", " ", $echo);
        }
    }
//      T   I   M   E   Z   O   N   E
    date_default_timezone_set("America/Montreal");
?>