<?php

$server = 'localhost';
$user = 'laravel';
$pass = 'password';
$base = 'phpdashboard';

$conn = mysqli_connect($server, $user, $pass, $base);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
