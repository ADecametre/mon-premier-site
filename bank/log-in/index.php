<?php

if(!isset($_POST['utilisateur']) || !isset($_POST['motdepasse'])){
    echo '<title>Connexion | ADam Bank</title>';
    echo '<body onload="document.getElementById("foo").select();">';
    
                            #   FAIL OR NOT FAIL
    if(!isset($_GET['fail'])){
        echo '<div align="center" style="background-color: grey;"><h1>&#x1F614;</h1></div>';
    }else{
        switch($_GET['fail']){
            case true:
                echo '<div align="center" style="background-color: red;"><h1>&#x1F629;</h1></div>';
                break;
            default:
                echo '<div align="center" style="background-color: grey;"><h1>&#x1F614;</h1></div>';
        }
    }
    
    echo '
        <form method="post" align="center" ><br><br>
            Nom d\'utilisateur : <input id="foo" type="text" name="utilisateur"><br><br>
            Mot de passe : <input type="password" name="motdepasse"><br><br>
            <input type="submit" value="OK">
        </form>
    ';
    echo '</body>';
}else{
    require "../../connect.php";
    
    $sql = "SELECT * FROM `b_users` WHERE `id`='".$_POST['utilisateur']."' && `password`='".$_POST['motdepasse']."'";
    $result = $connect->query($sql);

    if($result->num_rows < 1){
        echo '<div align="center" style="background-color: red;"><h2>&#x1F629;</h2></div>';
        echo '<meta http-equiv="refresh" content="1;URL=/bank/log-in?fail=true">';
    }else if($result->num_rows > 1){
        echo "Error";
    }else{
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['id']=$row['id'];
        $_SESSION['N']=$row['N'];
        $_SESSION['A']=$row['A'];
        $_SESSION['B']=$row['B'];
        $_SESSION['R']=$row['R'];
        echo '
            <title>Connexion | ADam Bank</title>
            <meta http-equiv="refresh" content="1;URL=/bank">
            <div align="center" style="background-color: green;"><h1>&#x1F60F;</h1></div>
            <script>alert("Connexion établie avec succès !");</script>
        ';
        
    }
$connect->close();
}
?>