<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Criar conta</h1>

    <form method="POST" action="register.php">
        <label>Seu nome:</label><br>
            <input type="text" name="name" id="name"><br>
        <label>Número de celular ou e-mail:</label><br>
            <input type="text" name="" id=""><br>
        <label>Senha:</label><br>
            <input type="password" name="" id=""><br>
            <a>As senhas devem ter pelo menos 6 caracteres.</a><br>
        <label>Insira a senha nova mais uma vez:</label><br>
            <input type="password" name="" id=""><br>

        <input type="submit" value="Verificar e-mail" id="register" name="register"><br>
        </form>
        <div>
        <a>
            Ao criar uma conta, você concorda com as Condições de Uso da Amazon. Por favor verifique a Notificação de Privacidade, Notificação de Cookies e a Notificação de Anúncios Baseados em Interesse.
</a>
        </div>
        <a>Você já tem uma conta?</a><a href='../login/login.php'>Fazer login</a>
</body>
</html>