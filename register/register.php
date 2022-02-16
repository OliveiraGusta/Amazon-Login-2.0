<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn.icon-icons.com/icons2/1195/PNG/512/1490889698-amazon_82521.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Registro na Amazon</title>
</head>
<body>
<header>
        <nav>
          <a class="logo" href="/">Prime Video</a>
          <div class="mobile-menu">
            <div id="explore">Explorar</div>
           
          </div>
          <ul class="nav-list">
            <li><a href="#">Início</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Projetos</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
        </nav>
      </header>
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