<?php
session_start();
if(isset($_SESSION['code']) && $_SESSION['st']<time() && $_SESSION['fi']>time()){
    $servername = "localhost";
    $username = "id1519675_mydata";
    $password = "[REDACTED]";
    $dbname = "id1519675_mydata";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM beta WHERE `code`='".$_SESSION['code']."' AND `act`='true' AND `st`='".$_SESSION['st']."' AND `fi`='".$_SESSION['fi']."'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "ok";
        }
    } else {
        echo '<meta http-equiv="refresh" content="1;URL=http://a-decametre.tk/beta">';
    }
    $conn->close();
}else{
    echo '<meta http-equiv="refresh" content="1;URL=http://a-decametre.tk/beta">';
}
?>