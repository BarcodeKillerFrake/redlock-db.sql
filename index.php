<?php
$servername = "mysql";
$username = "root";
$password = "password";
$dbname = "redlock";

$conn = new mysqli($servername, $username, $password);

$conn->select_db($dbname);

$sql = "SELECT ID, Nama, Alamat, Jabatan FROM users";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
        echo "ID: ". $row["ID"]. " - Nama: ". $row["Nama"]. " - Alamat " . $row["Alamat"]. " - Jabatan " . $row["Jabatan"]. "<br>";
    }

$conn->close();
?>