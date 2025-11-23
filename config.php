<?php
$host = "web-tugas-alfian.mysql.database.azure.com";
$user = "alfian";
$pass = "Hakimalfian22";
$db   = "db-webcrud";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
