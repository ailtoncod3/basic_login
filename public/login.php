<?php
defined('CONTROL') or die('<h1>Access denied<h1>');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        $erro = 'Email e senha são obrigatorios';
    }

    if(empty($erro)){
        $users = require_once(__DIR__ . '/../inc/users.php');

        foreach($users as $u) {
            if($u['user'] == $email && password_verify($password, $u['password'])) {
                $_SESSION['user'] = $email;
                header('location: index.php?route=home');
            }
        }
        $erro = 'Usuario e/ou senha inválidos';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Login</h3>
    <form action="index.php?route=login" method="post">
        <Div>
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Email" value="usuario02@gmail.com">
        </Div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" value="senha002">
        </div>
        <div>
            <input type="submit" value="login">
        </div>        
    </form>
    <?php if(!empty($erro)): ?>
        <div>
            <p style="color: red;"><?= $erro; ?></p>            
        </div>
    <?php endif; ?>
</body>
</html>