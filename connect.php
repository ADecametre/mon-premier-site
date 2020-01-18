<?php

$servername = "localhost";
$username = "id1519675_mydata";
$password = "[REDACTED]";
$dbname = "id1519675_mydata";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Error : " . $connect->connect_error);
} //else{ echo "Database connected<br><br><br>"; }

/*

$sql = "SELECT id, nom, age FROM Test";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Id : " . $row["id"]. " - Nom : " . $row["nom"]. " - Age : " . $row["age"]. "<br>";
    }
} else {
    echo "0 results";
}

$sql2 = "INSERT INTO Test (nom, age)
VALUES ('rien', '100')";

if ($connect->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $connect-->error;
}
*/
?>