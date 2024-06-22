<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificação de usuário e senha (exemplo simples)
    if ($username === 'caua' && $password === 'senha123') {
        // Autenticação bem-sucedida
        $_SESSION['username'] = $username;
        header('Location: pagina-restrita.php');
        exit();
    } else {
        // Autenticação falhou
        echo "<script>alert('Usuário ou senha incorretos');</script>";
        // Redirecionar de volta para o formulário de login
        echo "<script>window.location.href = 'index.html';</script>";
    }
}
?>
