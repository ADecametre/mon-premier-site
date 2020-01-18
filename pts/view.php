<?php

if(isset($_GET['info'])){
    switch($_GET['info']){
        case "n1":
            $v=1;
            break;
        case "n2":
            $v=2;
            break;
        case "p1":
            $v=3;
            break;
        case "p2":
            $v=4;
            break;
        default:
            exit("ERROR");
    }
}

require '../connect.php';

$sql = "SELECT `".$v."` FROM var WHERE `name`='pts'";
$result = $connect->query($sql);

if ($result->num_rows != 1) {
    exit("ERROR");
} else {
    while($row = $result->fetch_assoc()) {
        echo $row[$v];
    }
}
$connect->close();


?>