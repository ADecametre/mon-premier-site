<?php
require "../../../connect.php";

//$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
$sql="UPDATE `var` SET `info` = '".$_GET['n_bines']."' WHERE `var`.`name` = '".$_GET['name']."';";

if ($connect->query($sql) === TRUE) {
    echo "-";
} else {
    echo "Error updating record: " . $connect->error;
}

$connect->close();
?>

<div align="center"><h1 style="font-size:100px;"><small>Vous me devez </small><br><b>
<?php echo $_GET['n_bines'] ?>
<b><br><small> bines.</small></h1></div>