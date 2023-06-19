<?php
    include("conexao.php");

    $usuario = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['senha'];
    $hash = password_hash('$password', PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario(nome, email, senha) VALUES('$usuario', '$email', '$hash')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado!";
    }    
    else {
        echo "Erro!".mysqli_error($conexao);
    }

    mysqli_close($conexao);
?>

