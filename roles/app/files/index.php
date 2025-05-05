<?php
$host = 'localhost';
$user = 'webuser';
$pass = 'webpass';
$db = 'webapp';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
echo "Hello World! Connexion MySQL réussie.";
$conn->close();
?>
