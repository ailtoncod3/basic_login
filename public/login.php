<?php
defined('CONTROL') or die('<h1>Access denied<h1>');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        $erro = 'Email e senha são obrigatorios';
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
            <input type="text" name="email" placeholder="Email">
        </Div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">
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