<?php

include("conexao.php");

$senha = "password";
$senhaCriptografada = password_hash($senha,PASSWORD_DEFAULT);

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$permissao = $_POST['permissao'];
$user = $_POST["user"];
$pass = password_hash($_POST['password'],PASSWORD_DEFAULT);
$arquivo = $_FILES['foto'];
$obs = $_POST['observacao'];

if($arquivo !== null){
    preg_match("/\.(png|jpg|jpeg){1}$/i",$arquivo["name"],$ext);

    if($ext == true){
        $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];
        $caminho_arquivo = "imagens/".$nome_arquivo;
        move_uploaded_file($arquivo["tmp_name"], $caminho_arquivo);

        $sql = "INSERT INTO 'user'('nome', 'cpf`, 'email', 'permissao', 'usuario', 'senha', 'imagem', 'observacao', 'datainc') 
                           VALUES ($nome,$cpf,$email,$permissao,$user,$pass,$nome_arquivo,$obs,NOW())";

        $insert = mysqli_query($conexao,$sql);

    }
}

header('Location:cadastro_cliente.php?msg=1');

