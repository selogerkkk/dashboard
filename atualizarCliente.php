<?php

include 'config.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$mail = $_POST['email'];
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];
$arquivo = $_FILES['fotoatualizada'];


if ($arquivo !== null) {
    preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);
    if ($ext == true) {
        $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];
        $caminho_arquivo = "imagens/" . $nome_arquivo;
        copy($arquivo['tmp_name'], $caminho_arquivo);
        $sql = "UPDATE `cliente` SET 
        `nome` = '$nome',
        `email` = '$mail',
        `telefone` = '$telefone',
        `estado` = '$estado',
        `imagem` = '$nome_arquivo'
        WHERE `id_cliente` = $id";
        $result = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE `cliente` SET 
        `nome` = '$nome',
        `email` = '$mail',
        `telefone` = '$telefone',
        `estado` = '$estado'
        WHERE `id_cliente` = $id";
        $result = mysqli_query($conn, $sql);
    }
}

header('location: formCliente.php');
