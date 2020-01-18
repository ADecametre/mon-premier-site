<meta charset="utf8_general_ci" />
<?php
echo "<div style=\"color: red;\" align=\"center\"><b><h5><span class=\"glyphicon glyphicon-record\"></span> En direct : </h5><h4>";
echo date("d/m/Y  h:m:s a");
echo "</h4></b></div>";

echo "<br><img width=\"100%\" height=\"200px\" src=\"http://vignette2.wikia.nocookie.net/desencyclopedie/images/b/b0/Horiz.png/revision/latest?cb=20080802150457\" /><br>";

include '../connect.php';
  $sql = 'SELECT * FROM `conversation-adam-ayman` WHERE id > 0 ';
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<section align=\"center\" ";
echo "style=\" margin-";
echo $row['align'];
echo ": 40%; background-color:";
echo $row['color'];
echo " width: 60%; border-radius: 16px; border-style: solid; border-width: 5px;\">";
echo "<span id=\"message1\">";
echo $row['id'];
echo "</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span id=\"message2\">";
echo $row['nom'];
echo "</span><h4 id=\"message3\">";
echo $row['message'];
echo "</h4></section><br><br><br>";
    };
} else {
    echo "<br><br><br><div align=\"center\"><h5><mark>Aucun message</mark><h5></div><br><br><br>";
};

echo "<br><img width=\"100%\" height=\"50px\" src=\"http://vignette2.wikia.nocookie.net/desencyclopedie/images/b/b0/Horiz.png/revision/latest?cb=20080802150457\" /><br>";

?>