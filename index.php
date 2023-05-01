<?php
$servername = "mysql";
$username = "root";
$password = "password";
$dbname = "redlock";
$count = 0;

$conn = new mysqli($servername, $username, $password);

$conn->select_db($dbname);

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
        echo "ID: ". $row["ID"]. " - Nama: ". $row["Nama"]. " - Alamat " . $row["Alamat"]. " - Jabatan " . $row["Jabatan"]. "<br>";
        $count++;
    }
    echo $count;

$conn->close();
?>