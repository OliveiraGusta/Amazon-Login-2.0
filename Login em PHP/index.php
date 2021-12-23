<?php
 require_once 'CLASS/users.php';
 $u = new User
?>

<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>AMAZON PRIME 2.0</title>
    <link rel="stylesheet" href="CSS/style.css">
    

</head>
<body>  

    <div id="corpo-from">
    <h4 class="title-form" id="login">Bem-vindo(a) a plataforma.</h4>
    <h2 class="title-form">Faça seu Login</h2>
        <form method="POST">
            <input type="email" name="email" placeholder="E-mail" maxlength="40">
            <input type="password" name="password" placeholder="Sua senha"  maxlength="20">
            <input type="submit" value="ENTRAR">
            <h5 class="title-form" id="register">Não tem uma conta? <a href="register.php">CADASTRE-SE AGORA!</a>
        </form>
    </div>
<?php

?>
</body>
</html> 