<?php

include 'config.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$mail = $_POST['email'];
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];

$sql = "UPDATE `cliente` SET 
        `nome` = '$nome',
        `email` = '$mail',
        `telefone` = '$telefone',
        `estado` = '$estado'
        WHERE `id_cliente` = $id";


$result = mysqli_query($conn, $sql);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


header('location: formCliente.php');
