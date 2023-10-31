<?php

include 'config.php';
$id = $_POST['id'];

$sql = "DELETE FROM `cliente` WHERE `id_cliente` = $id";

print $id;
$result = mysqli_query($conn, $sql);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


header('location: formCliente.php');
