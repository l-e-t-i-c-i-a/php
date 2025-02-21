<?php
$host = "localhost";
$user = "root"; // Usuário padrão do MySQL no XAMPP
$pass = ""; 
$dbname = "cantina";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
