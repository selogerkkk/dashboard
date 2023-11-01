<?php

include 'config.php';
$id = $_POST['id'];

$sql = "DELETE FROM `cliente` WHERE `id_cliente` = $id";

$result = mysqli_query($conn, $sql);

header('location: formCliente.php');
