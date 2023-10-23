<?php

include 'config.php';

$nome = $_POST['nome'];
$mail = $_POST['mail'];
$telefone = $_POST['telefone'];
$cpfcnpj = $_POST['cpfcnpj'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['uf'];
$arquivo = $_FILES['foto'];

if ($arquivo !== null) {
    preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);

    if ($ext == true) {
        $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];
        $caminho_arquivo = "imagens/" . $nome_arquivo;
        if (copy($arquivo['tmp_name'], $caminho_arquivo)) {
            echo "upou";
        }
        $sql = "INSERT INTO `cliente` (`nome`, `email`, `telefone`, `cpfcnpj`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `imagem`, `cep`) VALUES ('$nome','$mail','$telefone','$cpfcnpj','$logradouro','$numero','$complemento','$bairro','$cidade','$estado','$nome_arquivo','$cep')";
        $result = mysqli_query($conn, $sql);
    }
}

echo $arquivo['tmp_name'] . PHP_EOL;
echo $nome_arquivo . PHP_EOL;
echo $caminho_arquivo . PHP_EOL;
