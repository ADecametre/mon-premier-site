<?php //if($_SERVER['REMOTE_ADDR']!="96.127.239.168"){exit('<body align="center"><br><br><h1 style="font-size:75px">PROBLÈME TECHNIQUE<br><small>Le site est en cours de réparation.</small></h1></body>');}
//      D   A   T   A   B   A   S   E
    function sql($sql, $info=null, $sel=null, $plus=null){
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
        if($plus!=null){
            eval($plus);
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
        setcookie("beta", $_POST["b_ppass"], time()+10*60, "/");
        die(header("Refresh:0"));
    }else if(isset($_COOKIE["beta"]) && sql('SELECT * FROM `b_code` WHERE `code`="'.$_COOKIE["beta"].'" AND `st`<'.time().' AND `fi`>'.time(), "nrow")>=1){
        $_GLOBALS['b']="(B) ";
        $GLOBALS['b_pass']=true;
        setcookie("beta", $_COOKIE["beta"], time()+10*60, "/");
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
//      V   E   R   S   I   O   N
    sql("SELECT `v`, `date`, `hour` FROM `ver` ORDER BY `v` ASC", null, '
        if(date_create_from_format("d/m/y H:i", date("d/m/y H:i"))>=date_create_from_format("d/m/y H:i", $row["date"]." ".$row["hour"]) && strpos($row["date"], "?")===false){
            $GLOBALS["cv1"]=$row["v"];
        }else if(!isset($GLOBALS["fv1"])){
            $GLOBALS["fv1"]=$row["v"];
        }
    ');
?>