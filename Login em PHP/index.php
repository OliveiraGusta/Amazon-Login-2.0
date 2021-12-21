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
//Verificar se a pessoa clicou no submit
if(isset($_POST['name']))
{
    $name = addslashes ($_POST['name']);
    $email = addslashes ($_POST['email']);
    $cpf = addslashes ($_POST['cpf']);
    $password = addslashes ($_POST['password']);
    $confPassword = addslashes ($_POST['confPassword']);

    //Verificar campo vazio

    if(!empty($name) && !empty($email) && !empty($cpf) && !empty($password) && !empty($confPassword))
    {
        $u->connection("amazon_login","localhost","root","vertrigo");
        if($u->msgError == "")//Esta certo
        {
            if($password == $confPassword)
            {
               if( $u->register($name,$email,$cpf,$password))
               {
                echo"Cadastrado com sucesso";
               }
               else
               {
                echo"Email já cadastrado!";
               }
                
            }
            else
            {
                echo "Senha e Confirmar senha são diferentes"; 
            }
        }
        else{
            echo"ERRO: ".$u->msgError;
        }
    }
    else{
    echo "Preencha todos os campos!";
    }
}
?>
</body>
</html> 