<?php
defined('CONTROL') or die('<h1>Access denied<h1>');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h3>Bem-vindo à aplicação</h3>
    <hr>
    <span>usuário: <strong><?= $_SESSION['user']; ?></strong></span>
    <span>|</span>
    <span>
        <a href="?route=logout">Sair</a>
    </span>
</body>
</html>