<?php
    session_start();

    require "../connect.php";
    
    $sql = "SELECT * FROM `b_users` WHERE `id`='".$_SESSION['id']."'";
    $result = $connect->query($sql);
    
    
        $row = $result->fetch_assoc();
        #session_start();
        $_SESSION['id']=$row['id'];
        $_SESSION['N']=$row['N'];
        $_SESSION['A']=$row['A'];
        $_SESSION['B']=$row['B'];
        $_SESSION['R']=$row['R'];
        #echo '<meta http-equiv="refresh" content="1;URL=/bank"><script>alert("Connexion établie avec succès !");</script>';
        
        if(!isset($_GET['info'])){
            var_dump($_SESSION);
        }else{
            switch($_GET['info']){
                case 'id':
                    echo $_SESSION['id'];
                    break;
                case 'N':
                    echo $_SESSION['N'];
                    break;
                case 'A':
                    echo $_SESSION['A'];
                    break;
                case 'B':
                    echo $_SESSION['B'];
                    break;
                case 'R':
                    echo $_SESSION['R'];
                    break;
                case 'NT':
                    echo $_SESSION['N']." | ADam Bank";
                    break;
                default:
                    echo "ERROR";
            }
        }

?>