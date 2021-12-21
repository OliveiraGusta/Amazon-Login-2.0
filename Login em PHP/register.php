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

    <div id="corpo-from-regis">
    <h4 class="title-form" id="login">Bem-vindo(a) a plataforma.</h4>
    <h2 class="title-form">Cadastre-se</h2>
        <form method="POST">
            <input type="text" name="name" placeholder="Nome" maxlength="30">
            <input type="email" name="email" placeholder="E-mail" maxlength="40"> 
            <input type="tel" name="cpf"  placeholder="CPF" pattern="[0-9]{11}" maxlength="11">
            <input type="password" name="password"  placeholder="Sua senha" maxlength="20">
            <input type="password" name="confPassword"  placeholder="Confirme sua senha" maxlength="20" >
            <input type="submit" value="CADASTRE">
            <h5 class="title-form" id="register"> Já tem uma conta? <a href="index.php">FAÇA SEU LOGIN!</a>
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