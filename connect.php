<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletrobasketkings";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("A conexão não falhou! " . mysqli_connect_error());
}
?>