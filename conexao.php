<?php

$username = "root";
$password = "";
$servername = "localhost";
$database = "aula";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
} 
/*else {
    echo "BD conectado com sucesso!";
}*/

?>