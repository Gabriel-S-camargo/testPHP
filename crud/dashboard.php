<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h1>Bem-vindo, <?= $_SESSION['username']; ?>!</h1>
    <a href="read.php">Gerenciar Produtos</a><br><br>
    <a href="logout.php">Logout</a>
</body>

</html>