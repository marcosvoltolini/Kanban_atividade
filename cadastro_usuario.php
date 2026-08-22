<?php

include "conexao.php";

$mensagem = '';

if($_SERVER["REQUEST_METHOD"] == "POST"){

$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){

$mensagem = "Email inválido.";

}else{
    $nome = mysqli_real_scape_string($conexao, $nome);

    $email = mysqli_real_scape_string($conexao, $email);

    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

    if (mysqli_query($conexao, $sql)) {
        $mensagem = "Cadastro concluído.";
    }else{
        $mensagem = "Erro ao cadastrar usuário";

    }


}
} 
?>

<html lang="en">
<head>
    <link rel ="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <h1>Gerenciamento de tarefas</h1>

        <nav>

        <a href = "index.php"> Gerenciamento de tarefas </a>
        <a href = "cadastrar_usuario"> Gerenciamento de tarefas </a>
        <a href = "cadastrar_tarefas"> Gerenciamento de tarefas </a>
</body>
</html>