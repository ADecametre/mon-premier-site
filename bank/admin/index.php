<meta http-equiv="refresh" content="10">

<title>Admin | ADam Bank</title>
<body style="margin: 10% 8px 0px 8px;">

<?php
/*
require "../../connect.php";

$sql = "SELECT `id`, `N`, `B`, `R` FROM b_users";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p style='font-size:50px;'><b>".$row["id"]." <small>(".$row["N"].")</small> :</b> | <u>B :</u> ". $row["B"]." - <u>R :</u> ". $row["R"]."<br></p>";
    }
} else {
    echo "Nan";
}
*/


echo '
    <style>
        .t{
            font-size:55px;
            font-weight:bolder;
            font-family:fantasy;
        }
        .n{
            font-size:45px;
            font-weight:bold;
            font-family:cursive;
        }
        
        
        .v{
            font-size:35px;
            font-weight:lighter;
            font-family:inherit;
        }
        .dr{
            font-family:monospace;
        }
        .itr{
            font-family: fantasy;
            font-weight: 0;
        }
        
        
        .m{
            font-size:7px;
            font-weight:lighter;
            font-family:inherit;
        }
        .tab{
            display:inline;
            width:50%;
            // border: 4px black ridge;
            box-sizing: border-box;
        }
        table{
            display:inline;
        }
        tr{
            border: 3px black ridge;
        }
        td{
            border: 2px black ridge;
        }
    </style>
    <div align="center">
    <table align="center">
    <tr align="center">   <td style="border:5px black groove;"> <h1 class="t">TRs</h1> </td>   <td style="border:5px black groove;"> <h1 class="t">Users</h1> </td>   </tr>
    <tr align="center">
    <td style="border:5px black groove;">
    <div class="tab">
    <table align="left">
';

require 'function.php';
require "../../connect.php";

$sql = "SELECT * FROM `b_tr` ORDER BY `cr` ASC";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // function TR($nom, $donneur, $receveur, $argent)
        TR($row['N'], $row['D'], $row['R'], $row['A']);
        
echo '
        <tr border="3px">
            <td><p class="v itr"><small>'.$row['id'].'</small></p></td>
            <td>
                <p class="n">
                    <small>'.$row['N'].'</small>
                    
                    <span align="center" class="m"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['cr'].'
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <small>'.$row['ed'].'</small>
                    </span>
                </p>
            </td>
            <td align="center">
                <p class="v">
                    <span class="dr">'.$row['D'].' &#8594; '.$row['R'].'</span>
                    <br>
                    <small><small><small>'.$row['A'].'$</small></small></small>
                </p>
            </td>
        </tr>
';
        
    }
}else{echo "-";}

echo '</table></div></td>';

// echo '<div style="display:inline"><h1 style="display:inline; font-size:100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></div>';

// echo "<br><br><br>{".$GLOBALS['A']."} | {".$GLOBALS['BA']."}-{".$GLOBALS['RA']."}<br>{".$GLOBALS['F']."} | {".$GLOBALS['BF']."}-{".$GLOBALS['RF']."}<br><br><br>";

echo '<td style="border:5px black groove;"><div class="tab">
    <table align="center">';
    
require "../../connect.php";

$sql = "SELECT `id` FROM b_users";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
            <tr border="3px">
                <td><p class="n">'.$row['id'].'</p></td>
                <td><p class="v">'.
                    // $GLOBALS[$row['id']].
                '</p></td>
                <td><p class="v">'.$GLOBALS['B'.$row['id']].'</p></td>
                <td><p class="v">'.$GLOBALS['R'.$row['id']].'</p></td>
            </tr>
        ';
        
         $sql = "UPDATE `b_users` SET `A`=".$GLOBALS[$row['id']].",`B`=".$GLOBALS['B'.$row['id']].",`R`=".$GLOBALS['R'.$row['id']]." WHERE `id`='".$row['id']."';";
        
        if ($connect->query($sql) === TRUE) {
            $GLOBALS['upd']="true";
        } else {
            $GLOBALS['upd']="false";
        }
        
    }
} else {
    echo "-";
}
        // <tr border="3px">
        //     <td><p class="n">A</p></td>
        //     <td><p class="v">'.$GLOBALS['A'].'</p></td>
        //     <td><p class="v">'.$GLOBALS['BA'].'</p></td>
        //     <td><p class="v">'.$GLOBALS['RA'].'</p></td>
        // </tr>
        // <tr>
        //     <td><p class="n">F</p></td>
        //     <td><p class="v">'.$GLOBALS['F'].'</p></td>
        //     <td><p class="v">'.$GLOBALS['BF'].'</p></td>
        //     <td><p class="v">'.$GLOBALS['RF'].'</p></td>
        // </tr>
echo '</table>
    </div>
    </td></tr></table>
    </div>
';


    // switch($GLOBALS['upd']){
    //     case true:
    //         echo "Record updated successfully";
    //         break;
    //     case false:
    //         echo '<img src="false.png"> ' . $connect->error;
    //         break;
    // }
    echo '<br><div align="center"><img width="50px" src="'.$GLOBALS['upd'].'.png">' . $connect->error . '</div>';

$connect->close();
?>
</body>