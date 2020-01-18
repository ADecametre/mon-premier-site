<?php

if(isset($_GET['n']) && isset($_GET['v'])){

    
    function calc($val){
        require '../connect.php';
        
        $sql = "SELECT `".$_GET['n']."` FROM `var` WHERE `name`='pts'";
        $result = $connect->query($sql);

        if ($result->num_rows == 1) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                switch($val){
                    case "p":
                        return ($row[$_GET['n']]+1);
                        break;
                    case "n":
                        return ($row[$_GET['n']]-1);
                        break;
                    default:
                        return $val;
                }
            }
        } else {
            exit("ERROR2");
        }
        $connect->close();
    }
    
    
    require '../connect.php';

    $sql = "UPDATE var SET `".$_GET['n']."`='".calc($_GET['v'])."' WHERE name='pts'";

    if ($connect->query($sql) === TRUE) {
        echo '<button onclick="close()">OK</button>';
        echo '
            <script>setTimeout(close, 500)</script>
        ';
    } else {
        echo "Error : " . $connect->error;
    }

    $connect->close();

}else{
    exit("ERROR1");
}

?>